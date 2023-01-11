
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
            <div class="divNumTargeta">
              <p class="textoNumTargeta">ES</p>
              <input type="text" class="inputbox" name="card_number" id="card_number" minlength="22" maxlength="22" pattern="[0-9]+" required /> 
            </div>
          <div class="expcvv">
            <div>
              <p class="expcvv_text">Fecha de Expiracion</p>
              <input type="date" class="inputbox" name="exp_date" min="<?php echo date('Y-m-d'); ?>" id="exp_date" required />
            </div>
            <div>
              <p class="expcvv_text2">CVV</p>
              <input type="text" class="inputbox" name="cvv" id="cvv" minlength="3" maxlength="3" pattern="[0-9]+" required />
            </div>
          </div>
            <button type="submit" class="buttonCheckout">Pagar</button>
          </form>
        </div>
      </div>
    </div>
  
