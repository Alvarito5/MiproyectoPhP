<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--Login inicio de sesion-->
<div class="container">
        <div class="row">
          <div class="col s12 m6 offset-m4">
            <form action="index.html" method="get">
                <div class="row card-panel z-depth-4">       
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input
                    type="text"
                    placeholder="Ingresa tu cuenta de usuario"
                    id="usuario"
                    name="usuario"
                    class="validate"
                    required
                  />
                </div>
  
                <div class="input-field col s12">
                  <i class="material-icons prefix">fingerprint</i>
                  <input
                    type="password"
                    placeholder="Ingresa tu contraseña"
                    id="pswd"
                    name="pswd"
                    class="validate"
                    required
                  />
                </div>
                
                <button class="btn gray right">
                  <i class="material-icons right">login</i>
                  Iniciar Sesion
                </button>
              <p>
                <lu><a class="black-text text-lighten-3" href="#!">¿Olvidastes tu contraseña?</a></li>
                </p>
                <hr/>
                  <button class="btn green ligth">
                      <i class="material-icons right">login</i>
                      Crear Cuenta
                    </button>
                </div>  
            </form>
          </div>
        </div>
