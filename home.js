import {MDCTextField} from '@material/textfield';
import {MDCList} from '@material/list';


new MDCList(document.querySelector('.mdc-list'));


import {MDCTabBar} from '@material/tab-bar';
const tabBar = new MDCTabBar(document.querySelector('.mdc-tab-bar'));

// componentes
const list = new MDCList(document.getElementById('my-list'));
list.singleSelection = true;


// Editor 
const componentName = new MDCTextField(document.querySelector('.component-name'));


// Radio button
import {MDCRadio} from '@material/radio';

const radio = new MDCRadio(document.querySelector('.mdc-radio'));
const formField = new MDCFormField(document.querySelector('.mdc-form-field'));
formField.input = radio;