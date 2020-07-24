<?php include ("cabecalho.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>

  
</head>

<body >

  
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <form>
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationServer01"> Nome Paciente</label>
                <input type="text" class="form-control is-valid" id="validationServer01"  required>
                <div class="valid-feedback">
                  OK 
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer02">Convenio</label>
                <input type="text" class="form-control is-valid" id="validationServer02"  required>
                <div class="valid-feedback">
                 ok
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServerUsername">Procedimento</label>
                <div class="input-group">
                  <input type="text" class="form-control is-invalid" id="validationServerProcedimento" aria-describedby="inputGroupPrepend3" required>
                  <div class="invalid-feedback">
                    Porfavor inserir o procedimento.
                  </div>
                </div>
              </div>
            </div>
            
              <div class="col-md-3 mb-3">
                <label for="validationServer03">Data</label>
                <input type="number" class="form-control is-invalid" id="validationServer03" required>
                <div class="invalid-feedback">
                  Porfavor inserir a data.
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="validationServer04">Quantidade</label>
                  <input type="text" class="form-control " id="validationServer05" required>
                 
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationServer05">Unidade</label>
                  
                  <select class="custom-select " id="validationServer04" required>
                    <option selected disabled value="">Selecione...</option>
                    <option>...</option>
                  </select>
                </div>
  
                <div class="col-md-3 mb-3">
                  <label for="validationServer05">Descrição</label>
                  <select class="custom-select " id="validationServer04" required>
                    <option selected disabled value="">Selecione...</option>
                    <option>...</option>
                  </select>
                </div>
  
                <div class="col-md-3 mb-3">
                  <label for="validationServer05">VIA</label>
                  <input type="text" class="form-control " id="validationServer05" required>
                  
                </div>
              </div>

            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationServer04">Quantidade</label>
                <input type="text" class="form-control " id="validationServer05" required>
               
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer05">Unidade</label>
                
                <select class="custom-select " id="validationServer04" required>
                  <option selected disabled value="">Selecione...</option>
                  <option>...</option>
                </select>
              </div>

              <div class="col-md-3 mb-3">
                <label for="validationServer05">Descrição</label>
                <select class="custom-select " id="validationServer04" required>
                  <option selected disabled value="">Selecione...</option>
                  <option>...</option>
                </select>
              </div>

              <div class="col-md-3 mb-3">
                <label for="validationServer05">VIA</label>
                <input type="text" class="form-control d" id="validationServer05" required>
                
              </div>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Outras Inoformações (Observações)</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
          </div>
            <center><button class="btn btn-primary" type="submit">REGISTRAR DADOS</button></center>
          </form>
          
        </div>
       

</body>

</html>

<?php include  ("rodape.php") ?>	