<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Pagamento</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="payment-container">
    <div class="payment-header">
      <h1>Escolha sua forma de pagamento</h1>
      <p>Complete seu pagamento de forma rápida e segura</p>
    </div>

    <div class="payment-options">
      <label class="option-card">
        <input type="radio" name="payment-method" value="cartao" id="cartao">
        <div class="option-content">
          <img src="card_credt.png" alt="Cartão de Crédito" class="option-icon">
          <span>Cartão de Crédito</span>
        </div>
      </label>

      <label class="option-pix">
        <input type="radio" name="payment-method" value="pix" id="pix">
        <div class="option-content">
          <img src="pix2.png" alt="Pix" class="option-icon">
          <span>Pix</span>
        </div>
      </label>

      <label class="option-boleto">
        <input type="radio" name="payment-method" value="boleto" id="boleto">
        <div class="option-content">
          <img src="boleto.png" alt="Boleto Bancário" class="option-icon">
          <span>Boleto Bancário</span>
        </div>
      </label>
    </div>

    <div id="payment-details">
      <!-- Detalhes do pagamento aparecerão aqui -->
    </div>

    <button type="submit" id="submit-button">Finalizar Pagamento</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>

</body>
</html>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background-color: #f3f4f6;
  color: #333;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.payment-container {
  background-color: #ffffff;
  width: 100%;
  max-width: 600px;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
}

.payment-header {
  text-align: center;
  margin-bottom: 20px;
}

.payment-header h1 {
  font-size: 28px;
  color: #4CAF50;
}

.payment-header p {
  font-size: 16px;
  color: #777;
}

.payment-options {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 20px;
  margin-bottom: 30px;
}

.payment-options label {
  background-color: #f8f8f8;
  border-radius: 8px;
  padding: 15px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.payment-options label:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.option-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.option-icon {
  width: 50px;
  height: 50px;
  margin-bottom: 10px;
}

#payment-details {
  display: none;
  margin-top: 20px;
}

button {
  padding: 15px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 8px;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #000;
}
</style>
<script>
    document.querySelectorAll('input[name="payment-method"]').forEach((input) => {
  input.addEventListener("change", function () {
    const paymentDetails = document.getElementById("payment-details");
    const selectedMethod = this.value;

    if (selectedMethod === "cartao") {
      paymentDetails.innerHTML = `
        <h3>Cartão de Crédito</h3>
        <label for="card-number">Número do Cartão:</label>
        <input type="text" id="card-number" placeholder="XXXX XXXX XXXX XXXX" required> <br>
        <label for="card-expiry">Data de Validade:</label>
        <input type="text" id="card-expiry" placeholder="MM/AA" required> <br>
        <label for="card-cvc">CVC:</label>
        <input type="text" id="card-cvc" placeholder="CVC" required>
      `;
    } else if (selectedMethod === "pix") {
    // Função que gera ou retorna a chave Pix
    function gerarChavePix() {
        // Para fins de exemplo, vamos gerar uma chave aleatória
        return ""; 
    }

    const chavePix = gerarChavePix(); // Gerar a chave Pix dinamicamente

    paymentDetails.innerHTML = `
        <h3>Pix</h3>
        <p>Para realizar o pagamento via Pix, copie o código QR ou a chave Pix abaixo:</p>
        <div id="pix-qr">
            <img src="https://www.pngmart.com/wp-content/uploads/5/QR-Code-PNG-Download-Image.png" alt="QR Code Pix" width="200">
        </div>
        <p><strong>Chave Pix:</strong> ${chavePix}</p>
        <p>Você pode usar a chave ou o QR Code para completar o pagamento.</p>
    `;
}
     else if (selectedMethod === "boleto") {
      paymentDetails.innerHTML = `
        <h3>Boleto Bancário</h3>
        <p>Gerando boleto para pagamento...</p>
        <div id="boleto-pdf">
          <a href="#">Clique aqui para baixar o boleto</a>
        </div>
      `;
    }

    paymentDetails.style.display = "block";
  });
});
</script>