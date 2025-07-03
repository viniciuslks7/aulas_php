// JavaScript para funcionalidades de acessibilidade - VERSÃO FINAL

class AccessibilityManager {
  constructor() {
    this.currentFontSize = 'normal';
    this.currentTheme = 'light';
    this.controlsVisible = false;
    this.tabIndexCounter = 10;
    this.init();
  }

  init() {
    this.createAccessibilityControls();
    this.loadSavedPreferences();
    this.setupEventListeners();
    this.setupTabIndex();
    this.createSkipLink();
    this.announceChange('Sistema de acessibilidade carregado');
  }

  createSkipLink() {
    const skipLink = document.createElement('a');
    skipLink.href = '#main-content';
    skipLink.className = 'skip-link';
    skipLink.textContent = 'Pular para o conteúdo principal';
    skipLink.setAttribute('tabindex', '1');
    document.body.insertBefore(skipLink, document.body.firstChild);

    // Adiciona ID ao conteúdo principal se não existir
    const mainContent = document.querySelector('main, .container, .form-container, .result-box, body > div:first-of-type');
    if (mainContent && !mainContent.id) {
      mainContent.id = 'main-content';
    }
  }

  createAccessibilityControls() {
    // Botão toggle
    const toggleButton = document.createElement('button');
    toggleButton.className = 'accessibility-toggle';
    toggleButton.innerHTML = '♿';
    toggleButton.setAttribute('aria-label', 'Abrir controles de acessibilidade - Pressione Ctrl+Alt+A');
    toggleButton.setAttribute('title', 'Controles de Acessibilidade (Ctrl+Alt+A)');
    toggleButton.setAttribute('tabindex', '2');
    
    // Painel de controles
    const controlsPanel = document.createElement('div');
    controlsPanel.className = 'accessibility-controls';
    controlsPanel.style.display = 'none';
    controlsPanel.setAttribute('role', 'dialog');
    controlsPanel.setAttribute('aria-label', 'Controles de Acessibilidade');
    controlsPanel.setAttribute('aria-modal', 'true');
    
    controlsPanel.innerHTML = `
      <h4>🔧 Controles de Acessibilidade</h4>
      
      <div class="control-group">
        <label for="font-size-control">📝 Tamanho da Fonte:</label>
        <div class="button-group">
          <button id="font-small" aria-label="Fonte pequena - Ctrl+Alt+1" title="Fonte Pequena (Ctrl+Alt+1)">A-</button>
          <button id="font-normal" aria-label="Fonte normal - Ctrl+Alt+2" title="Fonte Normal (Ctrl+Alt+2)" class="active">A</button>
          <button id="font-large" aria-label="Fonte grande - Ctrl+Alt+3" title="Fonte Grande (Ctrl+Alt+3)">A+</button>
          <button id="font-xlarge" aria-label="Fonte extra grande - Ctrl+Alt+4" title="Fonte Extra Grande (Ctrl+Alt+4)">A++</button>
        </div>
      </div>
      
      <div class="control-group">
        <label for="theme-control">🎨 Tema Visual:</label>
        <select id="theme-control" aria-label="Selecionar tema - Ctrl+Alt+T para alternar">
          <option value="light">☀️ Claro</option>
          <option value="dark">🌙 Escuro</option>
          <option value="high-contrast">⚫ Alto Contraste</option>
        </select>
      </div>
      
      <div class="control-group">
        <button id="reset-preferences" aria-label="Restaurar configurações padrão">🔄 Restaurar Padrão</button>
        <button id="close-controls" aria-label="Fechar controles - ESC">❌ Fechar</button>
      </div>
      
      <div class="shortcuts-info">
        <h5>⌨️ Atalhos de Teclado:</h5>
        <ul>
          <li><code>Ctrl+Alt+A</code> - Abrir/fechar controles</li>
          <li><code>Ctrl+Alt+1-4</code> - Alterar tamanho da fonte</li>
          <li><code>Ctrl+Alt+T</code> - Alternar tema</li>
          <li><code>Tab</code> - Navegar entre elementos</li>
          <li><code>ESC</code> - Fechar este painel</li>
        </ul>
      </div>
    `;
    
    document.body.appendChild(toggleButton);
    document.body.appendChild(controlsPanel);
    
    this.toggleButton = toggleButton;
    this.controlsPanel = controlsPanel;
  }

  setupEventListeners() {
    // Toggle dos controles
    this.toggleButton.addEventListener('click', () => {
      this.toggleControls();
    });

    // Controles de fonte
    document.getElementById('font-small').addEventListener('click', () => {
      this.setFontSize('small');
      this.updateFontButtons('small');
    });
    
    document.getElementById('font-normal').addEventListener('click', () => {
      this.setFontSize('normal');
      this.updateFontButtons('normal');
    });
    
    document.getElementById('font-large').addEventListener('click', () => {
      this.setFontSize('large');
      this.updateFontButtons('large');
    });
    
    document.getElementById('font-xlarge').addEventListener('click', () => {
      this.setFontSize('xlarge');
      this.updateFontButtons('xlarge');
    });

    // Controle de tema
    document.getElementById('theme-control').addEventListener('change', (e) => {
      this.setTheme(e.target.value);
    });

    // Botão de reset
    document.getElementById('reset-preferences').addEventListener('click', () => {
      this.resetPreferences();
    });

    // Botão de fechar
    document.getElementById('close-controls').addEventListener('click', () => {
      this.toggleControls();
    });

    // Atalhos de teclado
    document.addEventListener('keydown', (e) => {
      this.handleKeyboardShortcuts(e);
    });

    // Fechar controles com ESC
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.controlsVisible) {
        this.toggleControls();
      }
    });

    // Trap focus no painel quando aberto
    this.controlsPanel.addEventListener('keydown', (e) => {
      if (e.key === 'Tab' && this.controlsVisible) {
        this.trapFocus(e);
      }
    });
  }

  setupTabIndex() {
    // Remove tabindex existentes problemáticos
    const allElements = document.querySelectorAll('[tabindex]');
    allElements.forEach(element => {
      if (element !== this.toggleButton && !this.controlsPanel.contains(element)) {
        element.removeAttribute('tabindex');
      }
    });

    // Configura tabindex para elementos interativos de forma sequencial
    const interactiveElements = document.querySelectorAll(
      'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [contenteditable="true"]'
    );
    
    let tabIndex = 10; // Começar após os controles de acessibilidade
    
    // Primeiro, elementos do skip link e controles de acessibilidade (já configurados)
    
    // Depois, elementos da página em ordem lógica
    interactiveElements.forEach(element => {
      if (!element.classList.contains('accessibility-toggle') && 
          !this.controlsPanel.contains(element) &&
          !element.classList.contains('skip-link')) {
        element.setAttribute('tabindex', tabIndex.toString());
        tabIndex++;
      }
    });

    console.log(`TabIndex configurado para ${tabIndex - 10} elementos`);
  }

  trapFocus(e) {
    const focusableElements = this.controlsPanel.querySelectorAll(
      'button, select, input, textarea, [tabindex]:not([tabindex="-1"])'
    );
    const firstElement = focusableElements[0];
    const lastElement = focusableElements[focusableElements.length - 1];

    if (e.shiftKey) {
      if (document.activeElement === firstElement) {
        e.preventDefault();
        lastElement.focus();
      }
    } else {
      if (document.activeElement === lastElement) {
        e.preventDefault();
        firstElement.focus();
      }
    }
  }

  updateFontButtons(activeSize) {
    // Remove classe active de todos os botões
    const fontButtons = this.controlsPanel.querySelectorAll('[id^="font-"]');
    fontButtons.forEach(button => button.classList.remove('active'));
    
    // Adiciona classe active ao botão selecionado
    const activeButton = document.getElementById(`font-${activeSize}`);
    if (activeButton) {
      activeButton.classList.add('active');
    }
  }

  toggleControls() {
    this.controlsVisible = !this.controlsVisible;
    this.controlsPanel.style.display = this.controlsVisible ? 'block' : 'none';
    
    if (this.controlsVisible) {
      this.toggleButton.setAttribute('aria-label', 'Fechar controles de acessibilidade - Pressione ESC');
      this.toggleButton.setAttribute('title', 'Fechar Controles (ESC)');
      // Foca no primeiro elemento do painel
      const firstButton = this.controlsPanel.querySelector('button');
      if (firstButton) {
        firstButton.focus();
      }
      this.announceChange('Painel de acessibilidade aberto');
    } else {
      this.toggleButton.setAttribute('aria-label', 'Abrir controles de acessibilidade - Pressione Ctrl+Alt+A');
      this.toggleButton.setAttribute('title', 'Controles de Acessibilidade (Ctrl+Alt+A)');
      this.toggleButton.focus();
      this.announceChange('Painel de acessibilidade fechado');
    }
  }

  setFontSize(size) {
    // Remove classes anteriores
    document.body.classList.remove('font-small', 'font-normal', 'font-large', 'font-xlarge');
    
    // Adiciona nova classe
    document.body.classList.add(`font-${size}`);
    
    this.currentFontSize = size;
    this.savePreferences();
    
    // Atualiza variável CSS
    const sizeMap = {
      'small': '14px',
      'normal': '16px',
      'large': '18px',
      'xlarge': '20px'
    };
    
    document.documentElement.style.setProperty('--font-size-normal', sizeMap[size]);
    
    const sizeNames = {
      'small': 'pequena',
      'normal': 'normal',
      'large': 'grande',
      'xlarge': 'extra grande'
    };
    
    this.announceChange(`Fonte alterada para ${sizeNames[size]}`);
  }

  setTheme(theme) {
    // Remove tema anterior
    document.documentElement.removeAttribute('data-theme');
    
    // Aplica novo tema
    if (theme !== 'light') {
      document.documentElement.setAttribute('data-theme', theme);
    }
    
    // Atualiza select
    document.getElementById('theme-control').value = theme;
    
    this.currentTheme = theme;
    this.savePreferences();
    
    const themeNames = {
      'light': 'claro',
      'dark': 'escuro',
      'high-contrast': 'alto contraste'
    };
    
    this.announceChange(`Tema alterado para ${themeNames[theme]}`);
  }

  handleKeyboardShortcuts(e) {
    // Ctrl + Alt + A: Abrir controles de acessibilidade
    if (e.ctrlKey && e.altKey && e.key.toLowerCase() === 'a') {
      e.preventDefault();
      this.toggleControls();
    }
    
    // Ctrl + Alt + 1-4: Tamanhos de fonte
    if (e.ctrlKey && e.altKey) {
      switch(e.key) {
        case '1':
          e.preventDefault();
          this.setFontSize('small');
          this.updateFontButtons('small');
          break;
        case '2':
          e.preventDefault();
          this.setFontSize('normal');
          this.updateFontButtons('normal');
          break;
        case '3':
          e.preventDefault();
          this.setFontSize('large');
          this.updateFontButtons('large');
          break;
        case '4':
          e.preventDefault();
          this.setFontSize('xlarge');
          this.updateFontButtons('xlarge');
          break;
      }
    }
    
    // Ctrl + Alt + T: Alternar tema
    if (e.ctrlKey && e.altKey && e.key.toLowerCase() === 't') {
      e.preventDefault();
      const themes = ['light', 'dark', 'high-contrast'];
      const currentIndex = themes.indexOf(this.currentTheme);
      const nextTheme = themes[(currentIndex + 1) % themes.length];
      this.setTheme(nextTheme);
    }
  }

  savePreferences() {
    const preferences = {
      fontSize: this.currentFontSize,
      theme: this.currentTheme
    };
    
    localStorage.setItem('accessibility-preferences', JSON.stringify(preferences));
  }

  loadSavedPreferences() {
    const saved = localStorage.getItem('accessibility-preferences');
    if (saved) {
      try {
        const preferences = JSON.parse(saved);
        this.setFontSize(preferences.fontSize || 'normal');
        this.setTheme(preferences.theme || 'light');
        this.updateFontButtons(preferences.fontSize || 'normal');
      } catch (e) {
        console.warn('Erro ao carregar preferências de acessibilidade:', e);
      }
    }
  }

  resetPreferences() {
    this.setFontSize('normal');
    this.setTheme('light');
    this.updateFontButtons('normal');
    localStorage.removeItem('accessibility-preferences');
    this.announceChange('Configurações restauradas para o padrão');
  }

  // Método para anunciar mudanças para leitores de tela
  announceChange(message) {
    const announcement = document.createElement('div');
    announcement.setAttribute('aria-live', 'polite');
    announcement.setAttribute('aria-atomic', 'true');
    announcement.style.position = 'absolute';
    announcement.style.left = '-10000px';
    announcement.style.width = '1px';
    announcement.style.height = '1px';
    announcement.style.overflow = 'hidden';
    
    document.body.appendChild(announcement);
    announcement.textContent = message;
    
    setTimeout(() => {
      if (document.body.contains(announcement)) {
        document.body.removeChild(announcement);
      }
    }, 1000);
  }
}

// Inicializar quando o DOM estiver carregado
document.addEventListener('DOMContentLoaded', () => {
  window.accessibilityManager = new AccessibilityManager();
});

// Função para adicionar acessibilidade a formulários dinamicamente
function enhanceFormAccessibility() {
  const forms = document.querySelectorAll('form');
  
  forms.forEach(form => {
    const inputs = form.querySelectorAll('input, select, textarea');
    
    inputs.forEach((input, index) => {
      // Adicionar labels se não existirem
      if (!input.getAttribute('aria-label') && !input.getAttribute('aria-labelledby')) {
        const label = form.querySelector(`label[for="${input.id}"]`);
        if (!label && input.placeholder) {
          input.setAttribute('aria-label', input.placeholder);
        } else if (!label && input.name) {
          input.setAttribute('aria-label', input.name.charAt(0).toUpperCase() + input.name.slice(1));
        }
      }
      
      // Adicionar descrições de erro
      input.addEventListener('invalid', (e) => {
        const errorId = `${input.name || input.id || 'input'}-error`;
        let errorElement = document.getElementById(errorId);
        
        if (!errorElement) {
          errorElement = document.createElement('div');
          errorElement.id = errorId;
          errorElement.className = 'error-message';
          errorElement.setAttribute('role', 'alert');
          errorElement.style.color = 'var(--primary-color)';
          errorElement.style.fontSize = '14px';
          errorElement.style.marginTop = '5px';
          input.parentNode.insertBefore(errorElement, input.nextSibling);
        }
        
        errorElement.textContent = input.validationMessage;
        input.setAttribute('aria-describedby', errorId);
      });
      
      // Limpar mensagens de erro quando válido
      input.addEventListener('input', () => {
        if (input.validity.valid) {
          const errorId = `${input.name || input.id || 'input'}-error`;
          const errorElement = document.getElementById(errorId);
          if (errorElement) {
            errorElement.textContent = '';
            input.removeAttribute('aria-describedby');
          }
        }
      });
    });
  });
}

// Chamar a função para aprimorar a acessibilidade de formulários após o DOM carregar
document.addEventListener('DOMContentLoaded', enhanceFormAccessibility);


