class Carte {
  constructor(markers) {
    this.markers = markers;
    console.log(this.markers)
    this.map = L.map("map", {
      center: [-8.80507876834652, 115.11340369779452],
      zoom: 3,
      gestureHandling: true,
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(this.map);
  }

  initMarkers() {
    const data = $.getJSON('/api/get-destinations')
    data.then((d) => {
      for (let i = 0; i < d.length; i++) {
        L.marker([d[i].position.lat, d[i].position.lng], {icon: this.colorMarker(d[i])})
          .addTo(this.map);
      }
    }, (err) => {
      console.log(err)
    })
  }

  colorMarker(markers) {
        return L.icon({
        iconUrl: '/public/images/icon.png',
        iconSize: [38, 50],
      });
  }
}

