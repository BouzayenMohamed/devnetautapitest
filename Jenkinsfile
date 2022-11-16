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

        stage ('Test API'){
            steps{
                 script{
                    SoapUIPro( environment: '', pathToProjectFile: '/var/lib/jenkins/SmartBear/ReadyAPI-3.42.0/bin/Game_Crude2.xml',
                     pathToTestrunner: '/var/lib/jenkins/SmartBear/ReadyAPI-3.42.0/bin/testrunner.sh',
                      projectPassword:'', testCase: '', testCaseTags: '',
                       testSuite: '', testSuiteTags: '')

                 }
            }
        }


    }

}
