pipeline {
    agent any
    options {
        disableConcurrentBuilds()
    }

    stages {

        // TODO: Build test

        stage('Copy documentation') {
            // Copy the documentation of all services into the documentation repository
            steps {
                dir("__riptide_docs") {
                    git url: 'https://github.com/Parakoopa/riptide-docs.git'
                    sh '../copy_docs.py'
                    sh 'git add source/repo_docs'
                    sh 'git commit -m "Riptide Repo documentation - Build for $(git rev-parse --short=8 ${GIT_COMMIT}) \n\nURL: https://github.com/Parakoopa/riptide-repo/commit/${GIT_COMMIT}"'
                    sh 'git push'
                }
            }
        }

    }

    post {
        always {
            junit 'test_reports/**/*.xml'
            sh "rm test_reports -rf || true"
        }
    }

}