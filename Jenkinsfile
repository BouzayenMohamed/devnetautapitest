pipeline {

    agent any


    stages {
       stage ('GIT') {
               steps{
                 script{
                     checkout([$class: 'GitSCM', branches: [[name: '*/main']],userRemoteConfigs: [[ credentialsId: 'Git',url :'https://github.com/BouzayenMohamed/devnetautapitest.git']]])
                 }

		}
        }

        stage ('build and run'){
            steps{
                 script{
                    sh"rm -rf /var/www/laravel_game_crude/"
                    sh"cp -R ${workspace}  /var/www/laravel_game_crude/"
                    sh"chmod -R 777 /var/www/laravel_game_crude"
                 }

        }

        }
    }

}
