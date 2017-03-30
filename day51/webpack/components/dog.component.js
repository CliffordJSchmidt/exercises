import React from 'react';

// a simple component creating a dog
var Dog = React.createClass({
   
   
   
   // method standup
   standUp:function(){

   }
   
   
    render: function() {
        return (
            // this is where all the createElement functions go




            <div className = "dog" >
                    { this this.props.name } is { this.state.positions}
                    <button onClick={}>Stand up!</button>
                                
            </div>
                  //  onClick={}without parentheses means gives on onClick event
                 // onClick={''} with.. means it is calling the function 
        )
    },
});

Dog.defaultProps



export default Dog;