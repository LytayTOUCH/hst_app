<template>
  <div class="ui card">
  <div class="image">
    <img src="/images/HST-Logo/HSTLogo.svg">
  </div>
  <div class="content">
    <a class="header">Kristy</a>
    <div class="meta">
      <span class="date">Joined in 2013</span>
    </div>
    <div class="description">
      VueJS has been rendering this Card Template.
    </div>
    </div>
    <div class="extra content">
    <a>
      <i class="user icon"></i>
      22 Friends
    </a>
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
