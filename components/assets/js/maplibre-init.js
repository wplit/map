

function xMapInit() {

    document.querySelectorAll('.brxe-xmap').forEach(map => {

        if (!map.id) {
            map.id = 'brxe-xmap-' + Math.random().toString(36).substr(2, 9);
        }
        
        new maplibregl.Map({
            container: map.id, // container id
            style: 'https://demotiles.maplibre.org/style.json', // style URL
            center: [0, 0], // starting position [lng, lat]
            zoom: 1 // starting zoom
        });

    })

}


document.addEventListener('DOMContentLoaded', () => {
    bricksIsFrontend && xMapInit()
  });