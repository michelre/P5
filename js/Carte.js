class Carte {
  constructor(reservation) {
    this.reservation = reservation
    this.map = L.map("map", {
      center: [47.218371, -1.553621],
      zoom: 13,
      gestureHandling: true,
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(this.map);
  }
}
