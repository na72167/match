const state = {
  authComponentsState: 'signUp',
  aboutMenuState: false,
  loading: false,
}

const getters = {
}

const mutations = {
  CHANGE_ABOUT_MENU_STATE(state,classAttribute) {
    state.aboutMenuState = classAttribute
  },
  SET_LOGIN_USER_INFO(state) {
    state.authComponentsState = 'login'
  },
  SET_SIGNUP_COMP_INFO(state) {
    state.authComponentsState = 'signUp'
  },
  SET_LOADING() {
    state.loading = true
  },
  CLEAR_LOADING(){
    state.loading = false
  }
}

const actions = {
  changeAboutMenuState (context,classAttribute) {
    context.commit('CHANGE_ABOUT_MENU_STATE',classAttribute);
  },
  setLoginUserInfo (context) {
    context.commit('SET_LOGIN_USER_INFO');
  },
  setSignUpCompInfo (context) {
    context.commit('SET_SIGNUP_COMP_INFO');
  },
  setLoading (context){
    context.commit('SET_LOADING');
  },
  clearLoading (context) {
    context.commit('CLEAR_LOADING');
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}