// TODO: write a Web Audio API drum machine. :)

var Metronome = (function() {
  
  var bits, tempo, ticker,
      seg = 0;
  
  function _start(el, bpm) {
    bits = el.querySelectorAll('span');
    tempo = 6000000/ bpm;
    clearInterval(ticker);
    ticker = setInterval(function() {
      bits[seg].classList.remove('active');
      seg++;
      if (seg > 3) seg = 0;
      bits[seg].classList.add('active');
    }, tempo)
  }
  
  return { start: _start }
})();

Metronome.start(document.querySelector('.metronome'), 10);