import React from 'react';
import Headline from './headline.component.js';

// a simple component creating a headline
var CarsList = React.createClass({
    render: function() {

        var h1 = React.createElement('h1', { }, 'Cars');

        var headline = React.createElement(Headline, {});

        var cars = React.createElement('div', { id: 'cars'}, 
            React.createElement('div', { className: 'car'},
                headline,
                React.createElement('h2', {}, 'Porsche'),
                React.createElement('span', { className: 'type' }, 'Carrera')
            ),
        );

        var wrapper = React.createElement('div', { id: 'cars-list'},
            h1, 
            cars
        );

        return wrapper;
    }
});

export default CarsList;