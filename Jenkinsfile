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
                    sh"php artisan serve"
                 }

        }

        }
    }

}
