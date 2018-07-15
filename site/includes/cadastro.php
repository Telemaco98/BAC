  <section style="background-color: rgba(89, 71, 71, 1);">
  <br><br><br><br><br><br><br><br><br><br><br><br><br>



    <!-- Login -->
<div id="login-container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xsm-2"></div>
        
        <br><br><br><br>

        <div class="container col-lg-4 col-md-4 col-sm-12 col-xsm-12">

        <!-- Nav tabs -->
                <ul class="nav nav-tabs form-signin no-padding nav-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#signin" aria-controls="signin" role="tab" data-toggle="tab"><h4 class="nav-tabs">Login</h4></a></li>
                    <li role="presentation"><a href="#register" aria-controls="home" role="tab" data-toggle="tab"><h4 class="nav-tabs">Cadastro</h4></a></li>
                    <li role="presentation"><a href="#reset" aria-controls="reset" role="tab" data-toggle="tab"><h4 class="nav-tabs">Alterar Senha</h4></a></li>
                </ul>
            <br><br>

                <!-- Tab panes -->
                <div class="tab-content form-signin">

                <!--Aba de cadastro-->
                    <div role="tabpanel" class="tab-pane" id="register">
                        <form id="registerForm" class="form-signin" name="register">
                            <label for="inputEmail" class="sr-only">Email</label>
                            <input type="email" id="inputEmailRegister" name="inputEmailRegister" class="form-control" placeholder="Email" required autofocus="">
                            <br>
                            <label for="inputPassword" class="sr-only">Senha</label>
                            <input type="password" id="inputPasswordRegister" name="inputPasswordRegister" class="form-control" placeholder="Senha" required>
                            <small id="passwordHelp" class="form-text text-muted">A senha deve ter no mínimo 6 caracteres</small>
                            <br>
    	                    <label for="confirmPassword" class="sr-only">Confirmar Senha</label>
                            <input type="password" id="confirmPassword" class="form-control" placeholder="Confirmar Senha" required>
                            <br>
                            <button id="registerBtn" class="btn btn-lg btn-primary btn-block btn-sub" type="submit">Cadastrar</button>
                        </form>
                    </div>
                    <!--Aba de cadastro Fim-->

                    <!--Aba de login-->
                    <div role="tabpanel" class="tab-pane active" id="signin">
                        <form id="signInForm" class="form-signin" name="signin">
                            <label for="inputEmail" class="sr-only">Email</label>
                            <input type="email" id="inputEmailSignIn" name="inputEmailSignIn" class="form-control" placeholder="Email" required autofocus>
                            <br>
                            <label for="inputPassword" class="sr-only">Senha</label>
                            <input type="password" id="inputPasswordSignIn" name="inputPasswordSignIn" class="form-control" placeholder="Senha" required>
                            <br>
                            <button id="signinBtn" class="btn btn-lg btn-primary btn-block btn-sub" type="submit">Login</button>
                        </form>
                    </div>
                    <!--Aba de login Fim-->

                    <!--Aba de reset Fim-->
                    <div role="tabpanel" class="tab-pane" id="reset">
                        <form id="signInForm" class="form-signin" name="reset">
                            <label for="inputEmail" class="sr-only">Email</label>
                            <input type="email" id="inputEmailReset" name="inputEmailReset" class="form-control" placeholder="Email" required autofocus>
                            <br>
                            <button id="resetBtn" class="btn btn-lg btn-primary btn-block btn-sub" type="submit">Solicitar Alteração</button>
                        </form>
                    </div>
                    <!--Aba de reset Fim-->
                </div>
            </div>
        
        <div class="col-lg-2 col-md-2 col-sm-2 col-xsm-2">
        <center>
            <img src="view/images/any/login-ou.png">
        </center>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xsm-2">
            <br><br><br><br><br><br>
            <img src="view/images/any/login-fb.png" class="img-login-w">
            <br><br><br>
            <img src="view/images/any/login-gg.png" class="img-login-w">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xsm-2"></div>
    </div>
    </div>
    <!-- Login Fim -->

    <hr>

    <!--                -->
    <!-- info-container -->
    <!--                -->
    <div class="container" id="info-container">
        <!--
        <div class="row">
            <div class="no-padding col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <ul id="signed-tab" class="nav nav-tabs nav-justified" role="tablist" style="padding-bottom:0px; margin: 0 auto 0 0;">
                    <li role="presentation" class="active"><a href="#data" aria-controls="data" role="tab" data-toggle="tab"><h4>Dados</h4></a></li>
                    <li role="presentation" id="logOutTab"><a href="#" aria-controls="logout" role="tab" data-toggle="tab"><h4>Sair</h4></a></li>
                </ul>
            </div>
        </div>
        -->

        <center><h3 style="color: #FFF">Faça seu cadastro e estude a hora que quiser</h3></center>
        <br><br><br>

        <div class="row content-row info-row">
        <div class="content-col col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
        <!-- Tab content -->
        <div class="tab-content">

            <!-- tab pane 2 -->
            <div role="tabpanel" class="row tab-pane active" id="data">

                <form id="data-form">

                    <div class="col-md-5 form-group">
                        <label class="lab-cad" for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Informe seu nome">
                    </div>
                    <div class="col-md-7 form-group">
                        <label class="lab-cad" for="inputSobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="inputSobrenome" placeholder="Informe seu sobrenome">
                    </div>

                    <div class="col-md-4 form-group">
                        <label class="lab-cad" for="inputTelefone">Telefone</label>
                        <input type="text" class="form-control" id="inputTelefone" placeholder="Informe seu telefone">
                    </div>
                    <div class="col-md-8 form-group">
                        <label class="lab-cad" for="inputCurso">Curso</label>
                        <input type="text" class="form-control" id="inputCurso" placeholder="Informe seu curso">
                    </div>

                    <div class="col-md-12 form-group">
                    <fieldset>
                        <legend></legend>
                        <button type="submit" class="btn btn-primary pull-right btn-cad"><h4>Cadastrar</h4></button>
                        <button type="submit" class="btn btn-primary pull-right btn-cad" id="logOutTab"><a href="#" aria-controls="logout" role="tab" data-toggle="tab"><h4>Sair</h4></a></button>
                        
                    </fieldset>
                    </div>
                </form>
            </div>

        </div>
        </div></div>
    </div>

    <center>
    <hr>
    <div>
        <a href="index.php">
        <p style="margin-top:50px; text-align: center; color: #FFF;">Voltar para a página inicial</p>
        </a>
    </div>
    <br><br>
    </center>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 col-xsm-12"></div>

</div>



<script src="https://www.gstatic.com/firebasejs/4.7.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCv4q73LIWkdA_wtbtqmMvJgoqV3GEfpTA",
    authDomain: "bac-db.firebaseapp.com",
    databaseURL: "https://bac-db.firebaseio.com",
    projectId: "bac-db",
    storageBucket: "bac-db.appspot.com",
    messagingSenderId: "738654535235"
  };
  firebase.initializeApp(config);
</script>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        // $('#login-container form').submit(function(e){
        $('form:not(#psForm)').submit(function(e){
            e.preventDefault();
        });

        $('#data-form').submit(function(){
            var nome = $(this).find('#inputNome').val();
            var sobrenome = $(this).find('#inputSobrenome').val();
            var telefone = $(this).find('#inputTelefone').val();
            var curso = $(this).find('#inputCurso').val();

            setUserData({
                nome: nome,
                sobrenome: sobrenome,
                telefone: telefone,
                curso: curso
            });
        });

        $('#registerBtn').click(function(){
            var email = $('#inputEmailRegister').val();
            var password = $('#inputPasswordRegister').val();
            var confirmPassword = $('#confirmPassword').val();
            if(password == confirmPassword){
                firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
                    console.log(error.message);
    		        alert(error.message);
                });
            } else {
                alert("Senhas não conferem");
            }
        });

        $('#signinBtn').click(function(){
            var email = $('#inputEmailSignIn').val();
            var password = $('#inputPasswordSignIn').val();
            firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
            console.log(error.message);
            alert(error.message);
                });
        });

        $('#resetBtn').click(function(){
            var email = $('#inputEmailReset').val();
            firebase.auth().sendPasswordResetEmail(email).then(function() {
                alert("E-mail de redefinição de senha enviado.");
            }, function(error) {
                alert(error);
            });
        });

        $('#logOutBtn').click(function(){
            firebase.auth().signOut();
        });

        $('#logOutTab').click(function(){
            if (confirm("Você está prestes a sair."))
                firebase.auth().signOut();
        });

        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                signIn(user);

                firebase.database().ref('users/' + user.uid + '/profile').on('value', function(snapshot) {
                    if(snapshot.val() !== null)
                        updateProfileFields(snapshot.val());
                });

                firebase.database().ref('users/' + user.uid + '/paid').on('value', function(snapshot) {
                    updatePaymentAlert(snapshot.val());
                });

            } else {
                signOut();
            }
        });

        function signIn(user){
            $('#login-container').hide();
            $('#info-container').show();
        }

        function signOut(){
            $('#info-container').hide();
            $('#login-container').show();
            $('#login-container form').trigger('reset');
        }

        function setUserData(data) {
            var user = firebase.auth().currentUser;

            if (user != null) {
                firebase.database().ref('users/' + user.uid + '/profile').set(data)
                .then(function() {
                    successAlert();
                })
                .catch(function(error) {
                    console.log(error);
                    errorAlert();
                });
            }
        }

        function updateProfileFields(snapshot){
            //user profile
            $('#data-form #inputNome').val(snapshot.nome);
            $('#data-form #inputSobrenome').val(snapshot.sobrenome);
            $('#data-form #inputTelefone').val(snapshot.telefone);
            $('#data-form #inputCurso').val(snapshot.curso);
        }

        function successAlert() {
            $("#update-success").slideDown("fast");

            setTimeout(function() {
                $("#update-success").slideUp(500, function() {
                    $(this).hide();
                });
            }, 2500);
        }

        function errorAlert() {
            $(".alert-danger").slideDown("fast");

            setTimeout(function() {
                $(".alert-danger").slideUp(500, function() {
                    $(this).hide();
                });
            }, 2500);
        }

        firebase.database().ref("info").on("value", function(data){
            var info = data.val();

            $('#db-info').html(info.txt);

        }, function(err){
            alert(err);
        });

    });

    </script>
  </section>