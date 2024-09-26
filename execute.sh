
# rm -r ./moodle/local/vpldatascience/
# mkdir ./moodle/local/vpldatascience/

rm -r ./vpldatascience/assets/
docker cp f3b59736fd3c7768863b32f1a3a3e68bfc1a2c6992dbf62eb5065e8d19850427:/home/vue-projects/vpl-data-science/dist/assets/ ./vpldatascience/assets/

# cp ./vpldatascience/ ./moodle/local/vpldatascience/