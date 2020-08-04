pipeline {
  agent any
    stages {
      stage('deploy to Heroku') {
        steps {
          withCredentials([[$class: 'UsernamePasswordMultiBinding', credentialsId: 'heroku-credentials', usernameVariable: 'GIT_USERNAME', passwordVariable: 'GIT_PASSWORD']]) {
            sh('echo $GIT_USERNAME')
            sh('echo $GIT_PASSWORD')
            sh('git push https://${GIT_USERNAME}:${GIT_PASSWORD}@git.heroku.com/cryptic-ravine-27940.git master')
          }
        }
      }
    }
}
