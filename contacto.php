<?php include ('include/header.php');?>
<!-- Contact -->
<div class="contact mt-125">
  <div class="container">
    <div class="section-header">
      <!-- <p>Get In Touch</p> -->
      <h2>Contactenos</h2>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fa fa-map-marker-alt"></i>
          </div>
          <div class="contact-text">
            <h3>Our Head Office</h3>
            <p>123 Street, New York, USA</p>
          </div>
        </div>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fa fa-phone-alt"></i>
          </div>
          <div class="contact-text">
            <h3>LLamanos a</h3>
            <p>+51 989 239 431 | +51 939 815 830</p>
          </div>
        </div>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="contact-text">
            <h3>Correo para mas Informacion</h3>
            <p>info@avanzahr.pe</p>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="contact-form">
          <div id="success"></div>
          <form
            name="sentMessage"
            id="contactForm"
            novalidate="novalidate"
            autocomplete="off"
          >
            <div class="control-group">
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Nombres"
                name="nombres"
                required="required"
                data-validation-required-message="Please enter your name"
              />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Apellidos"
                name="apellidos"
                required="required"
                data-validation-required-message="Please enter your name"
              />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input
                type="phone"
                class="form-control"
                id="name"
                placeholder="Telefono"
                required="required"
                name="telefono"
                data-validation-required-message="Please enter your name"
              />
              <p class="help-block text-danger"></p>
            </div>

            <div class="control-group">
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Correo electronico"
                required="required"
                name="email"
                data-validation-required-message="Please enter your email"
              />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <textarea
                class="form-control"
                id="message"
                placeholder="Escribe tu mensaje aquí"
                required="required"

                name="mensaje"
                data-validation-required-message="Please enter your message"
              ></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input type="checkbox" id="comunicacion" name="comunicacion" value="si"//>
              <label for="comunicacion"
                >Quiero recibir más comunicaciones de Avanza Human Resources
                S.A.C</label
              >
            </div>
            <div class="control-group mb-5">
              <input type="checkbox" id="politica" name="politica" value="si"/>
              <label for="politica"
                >He leído y acepto la política de protección de datos</label
              >
            </div>
            <div class="control-group mb-5">
                <input type="hidden" name="formulario" value="CONTACTOS">
            </div>

            <div class="d-flex justify-content-end">
              <button class="btn" type="submit" id="sendMessageButton">
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->
<?php include('include/footer.php');?>