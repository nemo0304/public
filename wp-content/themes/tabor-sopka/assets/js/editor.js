/*vytvoření stylů pro tlačítka v gutenbergu*/
wp.domReady(function() {
    wp.blocks.registerBlockStyle('core/button',{
        name: 'sopka-primary-btn',
        label: 'Primární styl',
        isDefault: true
    });
    wp.blocks.registerBlockStyle('core/button',{
        name: 'sopka-secondary-btn',
        label: 'Sekundární styl'
    });
    wp.blocks.registerBlockStyle('core/button',{
        name: 'sopka-light-btn',
        label: 'Neutrální styl'
    });
    
    /*odstranění výchozích stylů tlačítek*/
    wp.blocks.unregisterBlockStyle('core/button','fill');
    wp.blocks.unregisterBlockStyle('core/button','outline');
});

