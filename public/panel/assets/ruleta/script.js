window.APP = new Vue({
  el: '#app',
  data: {
    prizes: [
      'Premio 1',
      'Premio 2',
      'Premio 3',
      'Premio 4',
      'Premio 5',
      'Premio 6',
      'Premio 7',
      'Premio 8',
      'Premio 9',
      'Premio 10',
      'Premio 11',
      'Premio 12'
    ],
    radius: 0,
    max: 0,
    state: {
      spin: false
    }
  },
  mounted () {
    this.max = this.prizes.length
    this.radius = 360 / this.prizes.length
  },
  
  methods: {
    spin () {
      if (this.state.spin) {
        return
      }
      
      let index = Math.floor(Math.random() * this.max)
      let rotations = 360 * ((Math.ceil(Math.random() * 10)) + 20) + ((index - 1) / this.max * 360) + (Math.floor(Math.random() * (360/this.max)))
      // let rotations = ((index - 1) / this.max * 360)
      let seconds = 5 + Math.ceil(Math.random() * 3)
      console.log(rotations)
      console.log(index)
      console.log(this.prizes[index])
      this.state.spin = true
      
      new TweenMax.fromTo('#board', seconds, {
        rotation: 0
      },{
        rotation: -(rotations),
        ease: Sine.easeOut,
        onComplete: this.done
      })
    },
    
    done () {
      this.state.spin = false
    }
  }
})