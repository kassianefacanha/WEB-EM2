<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--
        Definição de metadados que otimiza a visualização da página 
        para dispositivos móveis.
        Essa linha desabilita a funcionalidade "zoom pinch", função esta
        que é feita quando você toca na tela com os dois dedos, como uma
        espécie de pinça ou pata de caranguejo
    -->
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <!-- Folha de Estilos padrã da página -->
    <link href="../common/css/estilo.css" rel="stylesheet" type="text/css" />
    <!-- Dependências do jQuery Alerts e do jQuery Validation Engine -->
    <script src="../common/js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="../common/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <!-- Inserção do jQuery Alerts, para melhor embelezar as mensagens de alerta -->
    <script src="../common/js/jquery.alerts.js" type="text/javascript"></script>
    <link href="../common/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- /Inserção do jQuery Alerts -->
    <!-- Inserção do jQuery Mobile, para criarmos a versão mobile do sistema -->
    <link href="../common/css/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css" />
    <script src="../common/js/jquery.mobile-1.0.min.js" type="text/javascript"></script>
    <!-- /Inserção do jQuery Mobile -->
    <!-- Inserção do jQuery Validation Engine, para auxiliar a validar formulários -->
    <script src="../common/js/jquery.validationEngine-pt.js" type="text/javascript"></script>
    <script src="../common/js/jquery.validationEngine.js" type="text/javascript"></script>
    <link href="../common/css/validationEngine.jquery.css" rel="stylesheet" type="text/css"/>
    <!-- Inicialização do jQuery Validation Engine, para ser possível usá-lo -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#validarformulario").validationEngine({promptPosition : "bottomLeft", scroll: false});
        });
    </script>
    <!-- /Inserção e Inicialização do jQuery Validation Engine -->
    <title>Sistema de Agenda</title>
</head>