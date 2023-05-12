            // Obtenha o elemento do ícone do carrinho
            const perfilIcon = document.querySelector('#perfil-icon');
        
            // Obtenha o elemento da janela do carrinho
            const perfilWindow = document.querySelector('#perfil-window');
        
            // Defina uma variável para manter o estado da janela do carrinho
            let perfilVisible = false;
        
            // Adicione um ouvinte de evento de mouseenter ao ícone do carrinho
            perfilIcon.addEventListener('mouseenter', () => {
              // Mostrar a janela do carrinho apenas se ela não estiver visível
              if (!perfilVisible) {
                perfilWindow.classList.add('show');
                perfilVisible = true;
              }
            });
        
            // Adicione um ouvinte de evento de mouseleave ao ícone do carrinho
            perfilIcon.addEventListener('click', () => {
              // Ocultar a janela do carrinho apenas se ela estiver visível
              if (perfilVisible) {
                perfilWindow.classList.remove('show');
                perfilVisible = false;
              }
            });