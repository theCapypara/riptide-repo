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
                    git url: 'git@github.com:Parakoopa/riptide-docs.git',
                        credentialsId: 'riptide-repo-ssh'
                    sh '../copy_docs.py'
                    sh 'git add source/repo_docs'
                    sshagent(credentials : ['riptide-repo-ssh']) {
                        sh 'git config core.sshCommand "ssh -v -o StrictHostKeyChecking=no"'
                        sh 'git config --global user.email "riptide@parakoopa.de"'
                        sh 'git config --global user.name "Riptide Repo Docs"'
                        sh 'git commit -m "Riptide Repo documentation - Build for $(git rev-parse --short=8 ${GIT_COMMIT}) \n\nURL: https://github.com/Parakoopa/riptide-repo/commit/${GIT_COMMIT}"'
                        sh 'git push'
                    }
                }
            }
        }

    }

}