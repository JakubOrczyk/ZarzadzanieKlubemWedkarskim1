#!/bin/sh

git init

git config --local user.name "student"

git config --local user.email "student@ur.edu.pl"

git add --all

git commit -m "Projekt"

git archive --format=zip HEAD -o ../JakubOrczykKlubWedkarski.zip

echo "Archiwizacja zakończona."
