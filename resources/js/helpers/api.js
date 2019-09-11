import axios from 'axios'

export function get(url) {
    return axios({
        method: 'GET',
        url: url
    })
}

export function post(url, payload) {
    return axios({
        method: 'POST',
        url: url,
        data: payload
    })
}

export function del(url) {
    return axios({
        method: 'DELETE',
        url: url
    })
}