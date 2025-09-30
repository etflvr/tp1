pipeline {
    agent any

    environment {
        // Chemin vers ton dossier contenant docker-compose.yml
        DOCKER_COMPOSE_PATH = "${env.WORKSPACE}/TP1-3"
    }

    stages {
        stage('Clone repository') {
            steps {
                // Cloner le dépôt Git
                git 'https://github.com/etflvr/tp1.git'
            }
        }

        stage('Build Docker Images') {
            steps {
                script {
                    // Construire les images Docker avec docker-compose
                    sh "docker-compose -f ${DOCKER_COMPOSE_PATH}/docker-compose.yml build"
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Démarrer les services en mode détaché avec docker-compose
                    sh "docker-compose -f ${DOCKER_COMPOSE_PATH}/docker-compose.yml up -d"
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    // Vérifier si le conteneur Web peut se connecter à la base de données
                    sh "docker exec -it web-container-name ping db-container-name"
                }
            }
        }

        stage('Clean up') {
            steps {
                script {
                    // Facultatif : nettoyer les conteneurs après les tests
                    // sh "docker-compose -f ${DOCKER_COMPOSE_PATH}/docker-compose.yml down"
                }
            }
        }
    }

    post {
        always {
            echo 'Pipeline terminé.'
        }

        success {
            echo 'Déploiement réussi !'
        }

        failure {
            echo 'Une erreur est survenue lors du pipeline.'
        }
    }
}

