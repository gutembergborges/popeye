function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

let prefix = '/admin'

export default [
  { path: prefix + '/', name: 'welcome', component: page('welcome.vue') },

  { path: prefix + '/login', name: 'login', component: page('auth/login.vue') },
  { path: prefix + '/register', name: 'register', component: page('auth/register.vue') },
  { path: prefix + '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: prefix + '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: prefix + '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: prefix + '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },

  { path: prefix + '/home', name: 'home', component: page('home.vue') },
  { path: prefix + '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') }
    ] },

  { path: prefix + '*', component: page('errors/404.vue') }
]
