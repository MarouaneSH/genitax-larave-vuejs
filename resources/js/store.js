import Vuex from 'vuex';
import Vue from 'vue';

Vue.use(Vuex);
export const store = new Vuex.Store({
    state: {
      treeviewOpenCache: null
    },
    getters : {
        getTreeviewOpenCache(state) {
            return state.treeviewOpenCache;
        }
    },
    mutations: {
        setTreeviewOpenCache (state, id) {
            state.treeviewOpenCache = id;
      }
    }
  })