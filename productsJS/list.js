function showList(itemName) {
  let resultList = itemName.map(function (item) {
    switch (item.hot) {
      case true:
        switch (item.sale) {
          case true:
            item.hot = `<div class="hot">HOT</div>`;
            item.sale = `<div class="hot sale">SALE</div>`;
            break;
          case false:
            item.hot = `<div class="hot">HOT</div>`;
            item.sale = ``;
            break;
        }
      case false:
        switch (item.sale) {
          case true:
            item.hot = ``;
            item.sale = `<div class="hot sale onlySale">SALE</div>`;
            break;
          case false:
            item.hot = ``;
            item.sale = ``;
            break;
        }
        break;
    }
    var noImgLink = "https://uppic.cc/d/-Pcsu9CNNFIibbd3dssrF";
    if (item.image == "") item.image = noImgLink;

    return `
      <a href="${item.link}" target="_blank" class="pdc">
                      <div class="pdContainer">
                          <div class="head">
                          <div class="name">${item.name}</div>
                          <p>${item.type}</p>
                      </div>
                      <div class="flexBoxContent">
                      <div class="imgs">
                          <img src="${item.image}" />
                      </div>
                      <div class="feature">
                          <p>Feature</p>
                          <ul>
                              ${item.feature
                                .map((x) => `<li>${x}</li>`)
                                .join("")}
                          </ul>
                      </div>
                      </div>
                      ${item.hot}
                      ${item.sale}
                      </div>
      </a>
                      `;
  });
  return resultList;
}
function ggFunction(item, brand) {
  window.history.pushState("", "", "/");
  items = window[item];
  let matches = _.where(items, { brand: brand });
  document.getElementById("slideshow_home").style.display = "none";
  document.getElementById("productCon").style.display = "none";
  document.getElementById("maincontent").style.display = "block";
  document.getElementById("item_container").innerHTML = showList(matches);
  window.scrollTo({ top: 0, behavior: "smooth" });
}

function getHead(itemName) {
  const result = productsRef.find(({ id }) => id === itemName);
  if (result) {
    return `${result.name} รุ่น ${result.model}`;
  }
}
