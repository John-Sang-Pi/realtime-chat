<template>
    <div id="message-container">
        <li style="margin-top:6px" class="list-group-item" id="list" :class="className">
            <slot></slot>
            <span id="time">{{ time }}</span>
        </li>
        <small class="badge float-right" style="width:37px;margin-right:4px;font-size:12px" :class="badgeClass">{{ user }}</small>
    </div>
</template>
<script>
export default {
    props: ['color', 'user', 'time'],
    computed: {
        className() {
            return 'list-group-item-' + this.color;
        },
        badgeClass() {
            return 'badge-' + this.color;
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}

</script>
<style>
    #time {
        font-size : 9px;
        margin-top : 20px;
        color: black;
        float: right;
        margin-right: 0;
    }
</style>