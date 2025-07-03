# Guia de Acessibilidade - Aulas PHP

## Funcionalidades Implementadas

### 1. Controles de Acessibilidade
- **Botão de Acesso**: Ícone de acessibilidade (♿) no canto superior direito
- **Painel de Controles**: Interface completa para ajustes de acessibilidade

### 2. Controle de Fonte
- **Tamanho Pequeno (A-)**: 14px
- **Tamanho Normal (A)**: 16px (padrão)
- **Tamanho Grande (A+)**: 18px
- **Tamanho Extra Grande (A++)**: 20px

### 3. Temas Visuais
- **Tema Claro**: Cores padrão com fundo branco
- **Tema Escuro**: Fundo escuro com texto claro
- **Alto Contraste**: Preto e branco com amarelo para destaque

### 4. Navegação por Teclado
- **Tab Index**: Ordem lógica de navegação
- **Skip Link**: "Pular para o conteúdo principal"
- **Indicadores de Foco**: Contorno visível em elementos focados

### 5. Atalhos de Teclado
- **Ctrl + Alt + A**: Abrir/fechar controles de acessibilidade
- **Ctrl + Alt + 1-4**: Alterar tamanho da fonte
- **Ctrl + Alt + T**: Alternar entre temas
- **ESC**: Fechar painel de controles

### 6. Melhorias Semânticas
- **Atributos ARIA**: Labels e descrições para leitores de tela
- **Roles**: Identificação de regiões da página
- **Lang**: Idioma definido como português brasileiro
- **Meta Viewport**: Responsividade para dispositivos móveis

### 7. Formulários Acessíveis
- **Labels**: Associação correta entre rótulos e campos
- **Validação**: Mensagens de erro acessíveis
- **Placeholder**: Textos de ajuda nos campos

### 8. Persistência
- **LocalStorage**: Preferências salvas automaticamente
- **Restauração**: Configurações mantidas entre sessões

## Como Usar

### Para Usuários
1. Clique no ícone ♿ no canto superior direito
2. Ajuste o tamanho da fonte conforme necessário
3. Escolha o tema mais confortável
4. Use os atalhos de teclado para acesso rápido

### Para Desenvolvedores
1. Os arquivos `accessibility.css` e `accessibility.js` foram adicionados a todas as páginas
2. As funcionalidades são inicializadas automaticamente
3. Não é necessária configuração adicional

## Compatibilidade
- **Navegadores**: Chrome, Firefox, Safari, Edge
- **Leitores de Tela**: NVDA, JAWS, VoiceOver
- **Dispositivos**: Desktop, tablet, mobile

## Padrões Seguidos
- **WCAG 2.1**: Diretrizes de Acessibilidade para Conteúdo Web
- **WAI-ARIA**: Especificações de acessibilidade
- **Semântica HTML5**: Estrutura adequada para tecnologias assistivas

