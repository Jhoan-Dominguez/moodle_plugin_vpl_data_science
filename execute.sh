
rm -r ./moodle/local/vpldatascience/
rm -r ./vpldatascience/assets/

docker cp b108ae893970390505e63e20b75dce2d57281fa033c2b04945f350478dfaabeb:/home/vue-projects/vpl-data-science/dist/assets/ ./vpldatascience/assets/
cp -r ./vpldatascience/ ./moodle/local/