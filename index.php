<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato">
    <script src="jaquery.js"> </script>
    <link rel="styleheet" href="css/style.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Loto" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
</head>
<body>
    <?php include"header.php"?>
    <section id="about" class="container-fluid">
        <div class="col-xs-8 col-md-4 profile-picture">
            <img src="img/me.jpg" alt="LANKOANDE Urbain" class="img-circle">
        </div>
        <div class="heading">
            <h1>Hello, c'est moi Urbain</h1>
            <h3>Programmeur, Développeur web & UI/UX Designer</h3>
            <a href="docs/" class="button1">Télécharger CV</a>
        </div>
    </section>

    <section id="skills">
        <div class="red-divider"> </div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>HTML 85</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>CSS 80</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>JAVASCRIPT 50</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>HTML 85</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>BOSOTSTRAP 50</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>PYTHON 67</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>C 80</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>C++ 55</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>JAVA 40</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>ANGULAR 55</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experience">
        <div class="container">
            <div class="white-divider"> </div>
            <div class="heading">
                <h2>Expérience </h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>UNIVERSITE AUBE NOUVELLE</h3>
                                <h4>Téchnologoe du Génie Informatique</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time">2021-2022</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Obtention de diplôme de Licence1</p>
                            </div>
                        </div>
                    </div> 
                </li>

                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>APPRENDRE A CODE </h3>
                                <h4>Cours de developpement web en ligne</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time">2022</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Bootstrap <br>Javascript </br>Jquery</p>
                            </div>
                        </div>
                    </div> 
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>LYCEE PROVINCIAL DE BOGANDE</h3>
                                <h4>Série Scientifique</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time">2017-2021</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Obtention de diplôme du Baccalauréat</p>
                            </div>
                        </div>
                    </div> 
                </li>

                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>LYCEE COMMUNAL DE BOGANDE</h3>
                                <h4>Enseignement Générale</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time">2012-2016</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Obtention de diplôme du BEPC</p>
                            </div>
                        </div>
                    </div> 
                </li>

                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcas"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>ECOLE PRIMAIRE YENTOUGRI DE BOGANDE</h3>
                                <h4> Enseignement Primaire</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time">2006-2011</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Obtention de diplôme du CEP</p>
                            </div>
                        </div>
                    </div> 
                </li>

            </ul>
        </div>
    </section>
    <section id="education">
        <div class="container">
        <div class="red-divider"> </div>
            <div class="heading">
                <h2>Education </h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2006 - 2012</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Ecole Primaire Yenoutougri de Bogandé</h3>
                        <h4>diplôme de CEP</h4>
                        <div class="red-divider"></div>
                        <p>Enseignement Générale (Primaire)</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2013 - 2016</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Lycee Municipal Bantia de Bogandé</h3>
                        <h4>diplôme de BEPC</h4>
                        <div class="red-divider"></div>
                        <p>Enseignement Générale</p>
                        <p>(Premier cycle)</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2017 - 2021</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Lycee Provincial de Bogandé</h3>
                        <h4>diplôme de Baccalauréat</h4>
                        <div class="red-divider"></div>
                        <p>Enseignement Scientifique</p>
                        <p>(Second cycle)</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2021 - 2022</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Université Aube Nouvelle</h3>
                        <h4>Licence 1 Technologie du Génie Informatique</h4>
                        <div class="red-divider"></div>
                        <p>Programmation</p>
                        <p>web Développement</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2022 </h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Apprendre-a-code.com</h3>
                        <h4>Formation online "Développeur web"</h4>
                        <div class="red-divider"></div>
                        <p>Bootstrap, Jquery, Javascript, Angular</p>
                        <p>Responsive Design</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="education-block">
                        <h5>2022</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Orange Digital Center</h3>
                        <h4>Formation online "Developpeur web"</h4>
                        <div class="red-divider"></div>
                        <p>Développement par maquette </p>
                        <p>Prototipage</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        
    </section>
</body>
<footer>
    <?php include"footer.php"?>
</footer>
</html>