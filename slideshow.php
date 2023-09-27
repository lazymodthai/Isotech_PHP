<script>
  $(document).ready(function () {
    document.getElementsByClassName("carousel-inner")[1].innerHTML = imgSli;
    for (i in sliSelected) {
      if (i == 0) {
        clss = "active";
      } else {
        clss == "";
      }
      document.getElementById("indica").innerHTML += `<button
    type="button"
    data-bs-target="#carouselIndicators"
    data-bs-slide-to="${i}"
    class ="${clss}"
    aria-current="true"
    aria-label="Slide ${parseInt(i) + 1}"
  ></button>`;
    }
  });
</script>
<div
  id="carouselIndicators"
  class="carousel slide carousel-dark"
  data-bs-ride="carousel"
>
  <div class="carousel-indicators" id="indica"></div>
  <div class="carousel-inner"></div>
  <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#carouselIndicators"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">ก่อนหน้า</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#carouselIndicators"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">ถัดไป</span>
  </button>
</div>
