import  hello  from './functions.js';

import React from 'react';
import ReactDOM  from 'react-dom';

import CarsList from './components/cars-list.component.js';

var list = React.createElement(CarsList, {});

ReactDOM.render(list, document.getElementById('react-app'));

