<?php if (isset($_SESSION['utilisateur'])) : ?>
    <div class="info-section">
        <h1>Vos informations</h1>
        <?php if (!empty($_SESSION['critereutilisateur'])) : ?>
            <div class="flex space-around">
                <div>
                    <ol class="info-list">
                        <div>
                            <li>Poid</li>
                            <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurPoid ?></p>
                        </div>
                        <div>
                            <li>Taille</li>
                            <p><?= $_SESSION['critereutilisateur']->critereUtilisateurTaille ?></p>
                        </div>
                        <div>
                            <li>Age</li>
                            <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurAge ?></p>
                        </div>
                        <div>
                            <li>IMC</li>
                            <p><?= $_SESSION["critereutilisateur"]->critereUtilisateurImc ?></p>
                        </div>
                    </ol>
                </div>
            </div>
        <?php else : ?>
            <p>Veuillez d'abord générer votre programme.</p>
        <?php endif; ?>

        <form method="post" action="/OurProgram">
            <div class="flex space-around">
                <button name="btnEnvoiProgGen" type="submit" value="envoyer">Générer programme</button>
            </div>
        </form>
        
        <!-- récupération du nombre de jours où l'utilisateur peut faire du sport -->
    <?php $nbJour = $_SESSION["critereutilisateur"]->critereUtilistaeurNbJour; ?>

    <?php if (isset($_SESSION['programmeUtilisateur'])) : ?>
        <?php $programmeUtilisateur = $_SESSION['programmeUtilisateur']; ?>
        
        <h2>Votre programme réparti sur <?= $nbJour ?> jours</h2>
        
        <?php if ($nbJour == 2) : ?>
            <!-- Code pour un programme sur 2 jours -->
            <div class="info-section">
                <h3>Jour 1</h3>
                <!-- Programme Poids de Corps Jour 1 -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
                
                <!-- Ajouter d'autres exercices pour le jour 1 si nécessaire -->
            </div>
            <div class="info-section">
                <h3>Jour 2</h3>
                <!-- Programme Musculation Jour 2 -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
                <!-- Ajouter d'autres exercices pour le jour 2 si nécessaire -->
            </div>
        <?php elseif ($nbJour == 3) : ?>
            <!-- Code pour un programme sur 3 jours -->
            <div class="info-section">
                <h3>Jour 1</h3>
                <!-- Programme Poids de Corps Jour 1 -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 2</h3>
                <!-- Programme Musculation Jour 2 -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 3</h3>
                <!-- Programme Cardio Jour 3 -->
                <?php if (!empty($programmeUtilisateur['cardioEndurence']) || !empty($programmeUtilisateur['cardioSprint']) || !empty($programmeUtilisateur['cardioMarche']) || !empty($programmeUtilisateur['cardioPente'])) : ?>
                    <h4>Cardio</h4>
                    <p>Endurance: <?= $programmeUtilisateur['cardioEndurence'] ?? 'Non défini' ?></p>
                    <p>Sprints: <?= $programmeUtilisateur['cardioSprint'] ?? 'Non défini' ?></p>
                    <p>Marche: <?= $programmeUtilisateur['cardioMarche'] ?? 'Non défini' ?></p>
                    <p>Pente: <?= $programmeUtilisateur['cardioPente'] ?? 'Non défini' ?></p>
                    <p>Distance: <?= $programmeUtilisateur['distance'] ?? 'Non défini' ?></p>
                    <p>Temps: <?= $programmeUtilisateur['temps'] ?? 'Non défini' ?></p>
                <?php endif; ?>
            </div>
        <?php elseif ($nbJour == 4) : ?>
            <!-- Code pour un programme sur 4 jours -->
            <div class="info-section">
                <h3>Jour 1</h3>
                <!-- Programme Poids de Corps Jour 1 -->
                <!-- Ajoutez le programme pour le jour 1 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 2</h3>
                <!-- Programme Musculation Jour 2 -->
                <!-- Ajoutez le programme pour le jour 2 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 3</h3>
                <!-- Programme Cardio Jour 3 -->
                <!-- Ajoutez le programme pour le jour 3 ici -->
                <?php if (!empty($programmeUtilisateur['cardioEndurence']) || !empty($programmeUtilisateur['cardioSprint']) || !empty($programmeUtilisateur['cardioMarche']) || !empty($programmeUtilisateur['cardioPente'])) : ?>
                    <h4>Cardio</h4>
                    <p>Endurance: <?= $programmeUtilisateur['cardioEndurence'] ?? 'Non défini' ?></p>
                    <p>Sprints: <?= $programmeUtilisateur['cardioSprint'] ?? 'Non défini' ?></p>
                    <p>Marche: <?= $programmeUtilisateur['cardioMarche'] ?? 'Non défini' ?></p>
                    <p>Pente: <?= $programmeUtilisateur['cardioPente'] ?? 'Non défini' ?></p>
                    <p>Distance: <?= $programmeUtilisateur['distance'] ?? 'Non défini' ?></p>
                    <p>Temps: <?= $programmeUtilisateur['temps'] ?? 'Non défini' ?></p>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 4</h3>
                <!-- Programme Musculation Jour 4 -->
                <!-- Ajoutez le programme pour le jour 4 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php elseif ($nbJour == 5) : ?>
            <!-- Code pour un programme sur 5 jours -->
            <div class="info-section">
                <h3>Jour 1</h3>
                <!-- Programme Poids de Corps Jour 1 -->
                <!-- Ajoutez le programme pour le jour 1 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 2</h3>
                <!-- Programme Musculation Jour 2 -->
                <!-- Ajoutez le programme pour le jour 2 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 3</h3>
                <!-- Programme Cardio Jour 3 -->
                <!-- Ajoutez le programme pour le jour 3 ici -->
                <?php if (!empty($programmeUtilisateur['cardioEndurence']) || !empty($programmeUtilisateur['cardioSprint']) || !empty($programmeUtilisateur['cardioMarche']) || !empty($programmeUtilisateur['cardioPente'])) : ?>
                    <h4>Cardio</h4>
                    <p>Endurance: <?= $programmeUtilisateur['cardioEndurence'] ?? 'Non défini' ?></p>
                    <p>Sprints: <?= $programmeUtilisateur['cardioSprint'] ?? 'Non défini' ?></p>
                    <p>Marche: <?= $programmeUtilisateur['cardioMarche'] ?? 'Non défini' ?></p>
                    <p>Pente: <?= $programmeUtilisateur['cardioPente'] ?? 'Non défini' ?></p>
                    <p>Distance: <?= $programmeUtilisateur['distance'] ?? 'Non défini' ?></p>
                    <p>Temps: <?= $programmeUtilisateur['temps'] ?? 'Non défini' ?></p>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 4</h3>
                <!-- Programme Musculation Jour 4 -->
                <!-- Ajoutez le programme pour le jour 4 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 5</h3>
                <!-- Programme Cardio Jour 5 -->
                <!-- Ajoutez le programme pour le jour 5 ici -->
                <?php if (!empty($programmeUtilisateur['cardioEndurence']) || !empty($programmeUtilisateur['cardioSprint']) || !empty($programmeUtilisateur['cardioMarche']) || !empty($programmeUtilisateur['cardioPente'])) : ?>
                    <h4>Cardio</h4>
                    <p>Endurance: <?= $programmeUtilisateur['cardioEndurence'] ?? 'Non défini' ?></p>
                    <p>Sprints: <?= $programmeUtilisateur['cardioSprint'] ?? 'Non défini' ?></p>
                    <p>Marche: <?= $programmeUtilisateur['cardioMarche'] ?? 'Non défini' ?></p>
                    <p>Pente: <?= $programmeUtilisateur['cardioPente'] ?? 'Non défini' ?></p>
                    <p>Distance: <?= $programmeUtilisateur['distance'] ?? 'Non défini' ?></p>
                    <p>Temps: <?= $programmeUtilisateur['temps'] ?? 'Non défini' ?></p>
                <?php endif; ?>
            </div>
        <?php elseif ($nbJour == 6) : ?>
            <!-- Code pour un programme sur 6 jours -->
            <div class="info-section">
                <h3>Jour 1</h3>
                <!-- Programme Poids de Corps Jour 1 -->
                <!-- Ajoutez le programme pour le jour 1 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 2</h3>
                <!-- Programme Musculation Jour 2 -->
                <!-- Ajoutez le programme pour le jour 2 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 3</h3>
                <!-- Programme Cardio Jour 3 -->
                <!-- Ajoutez le programme pour le jour 3 ici -->
                <?php if (!empty($programmeUtilisateur['cardioEndurence']) || !empty($programmeUtilisateur['cardioSprint']) || !empty($programmeUtilisateur['cardioMarche']) || !empty($programmeUtilisateur['cardioPente'])) : ?>
                    <h4>Cardio</h4>
                    <p>Endurance: <?= $programmeUtilisateur['cardioEndurence'] ?? 'Non défini' ?></p>
                    <p>Sprints: <?= $programmeUtilisateur['cardioSprint'] ?? 'Non défini' ?></p>
                    <p>Marche: <?= $programmeUtilisateur['cardioMarche'] ?? 'Non défini' ?></p>
                    <p>Pente: <?= $programmeUtilisateur['cardioPente'] ?? 'Non défini' ?></p>
                    <p>Distance: <?= $programmeUtilisateur['distance'] ?? 'Non défini' ?></p>
                    <p>Temps: <?= $programmeUtilisateur['temps'] ?? 'Non défini' ?></p>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 4</h3>
                <!-- Programme Musculation Jour 4 -->
                <!-- Ajoutez le programme pour le jour 4 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 5</h3>
                <!-- Programme Cardio Jour 5 -->
                <!-- Ajoutez le programme pour le jour 5 ici -->
                <?php if (!empty($programmeUtilisateur['cardioEndurence']) || !empty($programmeUtilisateur['cardioSprint']) || !empty($programmeUtilisateur['cardioMarche']) || !empty($programmeUtilisateur['cardioPente'])) : ?>
                    <h4>Cardio</h4>
                    <p>Endurance: <?= $programmeUtilisateur['cardioEndurence'] ?? 'Non défini' ?></p>
                    <p>Sprints: <?= $programmeUtilisateur['cardioSprint'] ?? 'Non défini' ?></p>
                    <p>Marche: <?= $programmeUtilisateur['cardioMarche'] ?? 'Non défini' ?></p>
                    <p>Pente: <?= $programmeUtilisateur['cardioPente'] ?? 'Non défini' ?></p>
                    <p>Distance: <?= $programmeUtilisateur['distance'] ?? 'Non défini' ?></p>
                    <p>Temps: <?= $programmeUtilisateur['temps'] ?? 'Non défini' ?></p>
                <?php endif; ?>
            </div>
            <div class="info-section">
                <h3>Jour 6</h3>
                <!-- Programme Musculation Jour 6 -->
                <!-- Ajoutez le programme pour le jour 6 ici -->
                <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                    <h4>Poids de Corps</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=HDFjA-uYRug" target="_blank">Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=LG5VgIty4VU" target="_blank">Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=J_Zm4XvE__s&pp=ygUOdHV0b3JpYWwgc3F1YXQ%3D" target="_blank">Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=wfxm7Sufd4Y&pp=ygUOdHV0b3JpYWwgYWJkb3M%3D" target="_blank">Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php else:?>
                    <h4>Musculation</h4>
                    <div class="a-exo">
                        <a href="https://www.youtube.com/watch?v=yR9Wpyf8gbk&pp=ygUVdHV0b3JpYWwgY3VybCBoYWx0ZXJl" target="_blank">Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=sfQKHQ2RWeo&pp=ygUZdHV0b3JpYWwgcHJlc3NlIMOgIGN1aXNzZQ%3D%3D" target="_blank">Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=BeWXXo5jVMM&pp=ygUXdHV0b3JpYWwgbW9sbGV0IG1hY2hpbmU%3D" target="_blank">Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=pcWVvjOLbBc&pp=ygUYdHV0b3JpYWwgdGlyYWdlIHBvaXRyaW5l" target="_blank">Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=SngodvMU0JA&pp=ygUYdHV0byBkw6l2ZWxvcHDDqSBjb3VjaMOp" target="_blank">Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=MO2GT3UtQAM&pp=ygURdHV0byBhYmRvIG1hY2hpbmU%3D" target="_blank">Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></a>
                        <a href="https://www.youtube.com/watch?v=o7NfUJJGT9U&pp=ygUUdHV0byBmZXNzaWVyIG1hY2hpbmU%3D" target="_blank">Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></a>
                        <a href="" target="_blank">Nombre de Séries: <?= 3 ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php else : ?>
        <p>Aucun programme trouvé. Veuillez d'abord générer votre programme.</p>
    <?php endif; ?>
</div>
<?php endif; ?>