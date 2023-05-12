            // Obtenha o elemento do ícone do carrinho
            const cartIcon = document.querySelector('#carrinho-icon');
        
            // Obtenha o elemento da janela do carrinho
            const cartWindow = document.querySelector('#cart-window');
        
            // Defina uma variável para manter o estado da janela do carrinho
            let cartVisible = false;
        
            // Adicione um ouvinte de evento de mouseenter ao ícone do carrinho
            cartIcon.addEventListener('mouseenter', () => {
              // Mostrar a janela do carrinho apenas se ela não estiver visível
              if (!cartVisible) {
                cartWindow.classList.add('show');
                cartVisible = true;
              }
            });
        
            // Adicione um ouvinte de evento de mouseleave ao ícone do carrinho
            cartIcon.addEventListener('click', () => {
              // Ocultar a janela do carrinho apenas se ela estiver visível
              if (cartVisible) {
                cartWindow.classList.remove('show');
                cartVisible = false;
              }
            });