var rp1, rp2, res;
var corpo = document.body;
var img = "imagem/stars.png";

window.onload = function () {
  corpo.style.backgroundImage = "url(" + img + ")";
  corpo.style.backgroundRepeat = "no-repeat";
  corpo.style.backgroundSize = "cover";
  corpo.style.backgroundPositionY = "200px";

  var p1 = document.createElement("div");
  p1.textContent = "Você dormiu bem?";
  document.body.appendChild(p1);

  p1.style.textAlign = "center";
  p1.style.fontSize = "1.6em";

  rp1 = document.createElement("select");

  rp1.style.display = "block";
  rp1.style.marginLeft = "auto";
  rp1.style.marginRight = "auto";
  rp1.style.fontSize = "1.3em";

  var opcao1s = document.createElement("option");
  opcao1s.value = true;
  opcao1s.text = "Sim";

  var opcao1n = document.createElement("option");
  opcao1n.value = false;
  opcao1n.text = "Não";

  rp1.add(opcao1s);
  rp1.add(opcao1n);
  document.body.appendChild(rp1);

  var p2 = document.createElement("div");
  p2.textContent = "Você está com sono?";
  document.body.appendChild(p2);

  p2.style.textAlign = "center";
  p2.style.fontSize = "1.5em";

  rp2 = document.createElement("select");

  rp2.style.display = "block";
  rp2.style.marginLeft = "auto";
  rp2.style.marginRight = "auto";
  rp2.style.fontSize = "1.3em";

  var opcao2s = document.createElement("option");
  opcao2s.value = true;
  opcao2s.text = "Sim";

  var opcao2n = document.createElement("option");
  opcao2n.value = false;
  opcao2n.text = "Não";

  rp2.add(opcao2s);
  rp2.add(opcao2n);
  document.body.appendChild(rp2);

  document.body.appendChild(document.createElement("br"));

  var enviar = document.createElement("button");
  enviar.textContent = "Enviar";
  document.body.appendChild(enviar);

  enviar.style.display = "block";
  enviar.style.marginLeft = "auto";
  enviar.style.marginRight = "auto";
  enviar.style.fontSize = "1.3em";

  enviar.addEventListener("click", resposta);

  res = document.createElement("p");

  res.style.textAlign = "center";
  res.style.fontSize = "1.5em";
  res.style.padding = "0";
  res.style.margin = "0";
};

function resposta() {
  if (rp1.value == "true" && rp2.value == "true") {
    res.textContent = "Impossível, se dormiu bastante não pode estar com sono.";
    document.body.appendChild(res);
  } else if (rp1.value == "false" && rp2.value == "true") {
    res.textContent = "Claro dormiu pouco, por isso está com sono.";
    document.body.appendChild(res);
  } else if (rp1.value == "true" && rp2.value == "false") {
    res.textContent = "Claro, dormiu bastante, por isso não está com sono.";
    document.body.appendChild(res);
  } else if (rp1.value == "false" && rp2.value == "false") {
    res.textContent =
      "Impossível, dormiu pouco, não tem como não estar com sono.";
    document.body.appendChild(res);
  }
}
