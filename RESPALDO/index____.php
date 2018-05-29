<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CUESTIONARIO LABORATORIOS | INSTITUTO MEXICANO DEL CEMENTO Y DEL CONCRETO A.C.</title>
    <link rel="stylesheet" href="assets/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom.css" />
</head>
<body>
 
<div class="container" ng-app="myApp" ng-controller="preguntasCtrl">
    <div class="row">
        <div class="col s12">
            <h4>Cuestionario</h4>
            <div id="modal-preguntas-form" class="modal">
                <div class="modal-content">
                    <h4 id="modal-product-title">Nuevo</h4>
                    <div class="row">
                        <div class="input-field col s12">
                            <input ng-model="certificacion" type="text" class="validate" id="form-name" placeholder="Tipo de certificación" />
                            <label for="certificacion">Certificación</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea ng-model="description" type="text" class="validate materialize-textarea" placeholder="Type description here..."></textarea>
                            <label for="description">Description</label>
                        </div>
                        <div class="input-field col s12">
                            <input ng-model="price" type="text" class="validate" id="form-price" placeholder="Type price here..." />
                            <label for="price">Price</label>
                        </div>
                        <div class="input-field col s12">
                            <a id="btn-create-product" class="waves-effect waves-light btn margin-bottom-1em" ng-click="createProduct()"><i class="material-icons left">add</i>Create</a>
            
                            <a id="btn-update-product" class="waves-effect waves-light btn margin-bottom-1em" ng-click="updateProduct()"><i class="material-icons left">edit</i>Save Changes</a>
            
                            <a class="modal-action modal-close waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">close</i>Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-action-btn" style="bottom:45px; right:24px;">
                <a class="waves-effect waves-light btn modal-trigger btn-floating btn-large blue" href="#modal-preguntas-form" ng-click="showCreateForm()"><i class="large material-icons">add</i></a>
            </div>
        </div>
    </div>
</div>



<script src="assets/js/angular.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="app/app.js"></script>
<script type="text/javascript" src="app/preguntas/controller.js"></script>
</body>
</html>