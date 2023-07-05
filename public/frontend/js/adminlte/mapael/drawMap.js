$(function () {
    'use strict'
    /* jVector Maps
     * ------------
     * Create a world map with markers
     */
    $('#map-markers').mapael({
      map: {
        name: 'map',
        zoom: {
          enabled: true,
          maxLevel: 10
        }
      }
    })

})