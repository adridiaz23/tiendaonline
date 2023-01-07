
    <div class="mainscreen">
      <div class="card">
        <div class="leftside">
          <img
            src="views\css\assets\imagenes\checkout.png"
            class="product"
            alt="Shoes"
          />
        </div>
        <div class="rightside">
          <form action="index.php?controller=Pedido&action=finalizarCompra" method="post">
            <h1>Metodo de Pago</h1>
            <h2>Información de Pago</h2>
            <p>Titular de la Targeta</p>
            <input type="text" class="inputbox" name="name" required />
            <p>Numero de Targeta</p> 
            <input type="text" class="inputbox" name="card_number" id="card_number" value="ES" maxlength="24" required" /> 
          <div class="expcvv">
            <div>
              <p class="expcvv_text">Fecha de Expiracion</p>
              <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
            </div>
            <div>
              <p class="expcvv_text2">CVV</p>
              <input type="number" class="inputbox" name="cvv" id="cvv" min="000" max="999" required />
            </div>
          </div>
            <button type="submit" class="buttonCheckout">CheckOut</button>
          </form>
        </div>
      </div>
    </div>
  
