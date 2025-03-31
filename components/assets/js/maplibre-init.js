

function xMapInit() {

    document.querySelectorAll('.brxe-xmap').forEach(map => {

        if (!map.id) {
            map.id = 'brxe-xmap-' + Math.random().toString(36).substr(2, 9);
        }
        
        new maplibregl.Map({
            container: map.id,
            style: 'https://demotiles.maplibre.org/style.json',
            center: [0, 0],
            zoom: 1
        });

    })

}


document.addEventListener('DOMContentLoaded', () => {
    bricksIsFrontend && xMapInit()
  });