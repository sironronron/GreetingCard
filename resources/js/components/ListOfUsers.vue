<template>
    <div>
        <div class="row">
            <div v-for="user in users" :key="user.id" class="col-lg-3">
                <a href="#">
                    <div class="card shadow-sm">
                        <img :src="user.photo_url" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title m-b-0">{{ user.name }}</h5>
                            <h6 class="text-muted m-t-0">@{{ user.username }}</h6>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    Greeted 0
                                </div>
                                <div class="col">
                                    Greetings 0
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: 'list-of-friends',

        data() {
            return {
                users: []
            }
        },

        created() {
            this.getUsers()
        },

        methods: {
            async getUsers() {
                axios.get('/users')
                .then((res) => {
                    this.users = res.data.users
                })
                .catch((err) => {
                    console.log(err)
                })
            }
        }
    }
</script>