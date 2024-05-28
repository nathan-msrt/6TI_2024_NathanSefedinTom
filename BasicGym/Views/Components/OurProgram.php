<?php if (isset($_SESSION['utilisateur'])) : ?>
    <h1>Vos informations</h1>
    <?php if (!empty($_SESSION['critereutilisateur'])) : ?>
        <div class="flex space-around">
            <div>
                <ol>
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
        <div>
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
        <div>
            <h3>Jour 1</h3>
            <!-- Programme Poids de Corps Jour 1 -->
            <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else:?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
            
            <!-- Ajouter d'autres exercices pour le jour 1 si nécessaire -->
        </div>
        <div>
            <h3>Jour 2</h3>
            <!-- Programme Musculation Jour 2 -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
            <!-- Ajouter d'autres exercices pour le jour 2 si nécessaire -->
        </div>
    <?php elseif ($nbJour == 3) : ?>
        <!-- Code pour un programme sur 3 jours -->
        <div>
            <h3>Jour 1</h3>
            <!-- Programme Poids de Corps Jour 1 -->
            <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else:?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
            <h3>Jour 2</h3>
            <!-- Programme Musculation Jour 2 -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
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
        <div>
            <h3>Jour 1</h3>
            <!-- Programme Poids de Corps Jour 1 -->
            <!-- Ajoutez le programme pour le jour 1 ici -->
            <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else:?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
            <h3>Jour 2</h3>
            <!-- Programme Musculation Jour 2 -->
            <!-- Ajoutez le programme pour le jour 2 ici -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
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
        <div>
            <h3>Jour 4</h3>
            <!-- Programme Musculation Jour 4 -->
            <!-- Ajoutez le programme pour le jour 4 ici -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
    <?php elseif ($nbJour == 5) : ?>
        <!-- Code pour un programme sur 5 jours -->
        <div>
            <h3>Jour 1</h3>
            <!-- Programme Poids de Corps Jour 1 -->
            <!-- Ajoutez le programme pour le jour 1 ici -->
            <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else:?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
            <h3>Jour 2</h3>
            <!-- Programme Musculation Jour 2 -->
            <!-- Ajoutez le programme pour le jour 2 ici -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
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
        <div>
            <h3>Jour 4</h3>
            <!-- Programme Musculation Jour 4 -->
            <!-- Ajoutez le programme pour le jour 4 ici -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
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
        <div>
            <h3>Jour 1</h3>
            <!-- Programme Poids de Corps Jour 1 -->
            <!-- Ajoutez le programme pour le jour 1 ici -->
            <?php if (!empty($programmeUtilisateur['corpPompe']) || !empty($programmeUtilisateur['corpTraction']) || !empty($programmeUtilisateur['corpSquat']) || !empty($programmeUtilisateur['corpAbdos'])) : ?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else:?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
            <h3>Jour 2</h3>
            <!-- Programme Musculation Jour 2 -->
            <!-- Ajoutez le programme pour le jour 2 ici -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
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
        <div>
            <h3>Jour 4</h3>
            <!-- Programme Musculation Jour 4 -->
            <!-- Ajoutez le programme pour le jour 4 ici -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
        <div>
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
        <div>
            <h3>Jour 6</h3>
            <!-- Programme Musculation Jour 6 -->
            <!-- Ajoutez le programme pour le jour 6 ici -->
            <?php if (!empty($programmeUtilisateur['muscuBras']) || !empty($programmeUtilisateur['muscuJambes']) || !empty($programmeUtilisateur['muscuMollets']) || !empty($programmeUtilisateur['muscuDos']) || !empty($programmeUtilisateur['muscuPecs']) || !empty($programmeUtilisateur['muscuAbdos']) || !empty($programmeUtilisateur['muscuFessiers'])) : ?>
                <h4>Musculation</h4>
                <p>Bras: <?= $programmeUtilisateur['muscuBras'] ?? 'Non défini' ?></p>
                <p>Jambes: <?= $programmeUtilisateur['muscuJambes'] ?? 'Non défini' ?></p>
                <p>Mollets: <?= $programmeUtilisateur['muscuMollets'] ?? 'Non défini' ?></p>
                <p>Dos: <?= $programmeUtilisateur['muscuDos'] ?? 'Non défini' ?></p>
                <p>Pectoraux: <?= $programmeUtilisateur['muscuPecs'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['muscuAbdos'] ?? 'Non défini' ?></p>
                <p>Fessiers: <?= $programmeUtilisateur['muscuFessiers'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php else :?>
                <h4>Poids de Corps</h4>
                <p>Pompes: <?= $programmeUtilisateur['corpPompe'] ?? 'Non défini' ?></p>
                <p>Tractions: <?= $programmeUtilisateur['corpTraction'] ?? 'Non défini' ?></p>
                <p>Squats: <?= $programmeUtilisateur['corpSquat'] ?? 'Non défini' ?></p>
                <p>Abdos: <?= $programmeUtilisateur['corpAbdos'] ?? 'Non défini' ?></p>
                <p>Nombre de Séries: <?= 3 ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php else : ?>
    <p>Aucun programme trouvé. Veuillez d'abord générer votre programme.</p>
<?php endif; ?>
<?php endif; ?>