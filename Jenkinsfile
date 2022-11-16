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
                    sh"sudo rm -rf /var/www/laravel_game_crude/"
                    sh"sudo cp -R ${workspace}  /var/www/laravel_game_crude/"
                    sh"sudo chmod -R 777 /var/www/laravel_game_crude"
                 }

        }

        }

stage ('build and run'){
           SoapUIPro (environment: '', pathToProjectFile: '/home/devlocal/SmartBear/ReadyAPI-3.42.0/bin/Game_Crude2.xml', pathToTestrunner: '/home/devlocal/SmartBear/ReadyAPI-3.42.0/bin/testrunner.sh',testCase: '', testCaseTags: '', testSuite: '', testSuiteTags: '')

        }


    }

}
