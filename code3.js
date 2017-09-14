import React from 'react';
import {
  AppRegistry,
  StyleSheet,
  Text,
  View,
  TextInput,
  TouchableOpacity } from 'react-native';

export default class App extends React.Component {
  constructor(props){
      super(props);
      this.state = {weight: '0', height: '0', bmi: 0, obs:''};
      this.compute = this.compute.bind(this);
    }

    compute(){
      console.log('On pressed!');
      let weight = parseFloat(this.state.weight);
      let height = parseFloat(this.state.height);
      let testbmi = weight/Math.pow(height/100, 2);
      this.setState({bmi: weight/Math.pow(height/100, 2)});

      if(testbmi  > 32){
          this.setState({obs:'Obese'});
      }
      else if (testbmi > 25  && testbmi < 32) {
        this.setState({obs:'Over Weight'});
      }
      else if (testbmi > 18.5  && testbmi < 25) {
        this.setState({obs:'Normal Weight'});
      }
      else{
        this.setState({obs:'Under Weight'});
      }
    }

    render() {
      return (
        <View style={styles.container}>
          <View style={styles.group}>
            <Text style={styles.title}>Weight (KG)</Text>
            <TextInput style={styles.input} keyboardType='numeric'
            value={this.state.weight}
              onChangeText={(weight) => this.setState({weight})}/>
          </View>
          <View style={styles.group}>
            <Text style={styles.title}>Height (CM)</Text>
            <TextInput style={styles.input} keyboardType='numeric'
              value={this.state.height}
              onChangeText={(height) => this.setState({height})}
              />
          </View>
          <View style={styles.center}>
            <View style={styles.group}>
              <Text style={styles.title}>BMI: {this.state.bmi.toFixed(2)}</Text>
              <Text style={styles.title}>Obesity level: {this.state.obs}</Text>

            </View>
            <View style={styles.group}>
              <TouchableOpacity style={styles.button}
                onPress={this.compute}>
                <Text style={styles.buttonText}>Compute</Text>
              </TouchableOpacity>
            </View>
          </View>
        </View>
      );
    }
  }
  const styles = StyleSheet.create({
    container: {
      flex: 1,
      justifyContent: 'center',
      flexDirection: 'column',
      padding: 20
    },
    group: {
      marginTop: 20
    },
    button: {
      backgroundColor: 'lightblue',
      padding: 20,
      borderWidth: 1
    },
    buttonText: {
      fontSize: 30
    },
    input: {
      padding: 10,

      height: 40,
      borderWidth: 1
    },
    title: {
      fontSize: 20
    },
    center: {
      alignItems: 'center'
    }

});

AppRegistry.registerComponent('flexbox', ()=>flexbox);



import React from 'react';
import {
  AppRegistry,
  StyleSheet,
  Text,
  View,
  TextInput,
  TouchableOpacity,
  TouchableHighlight  } from 'react-native';
  import formatTime from 'minutes-seconds-milliseconds';

export default class App extends React.Component {
  constructor(props) {
  super(props);
  this.state = {
    timeElapsed: null,
    running: false,
    startTime: null,
    laps: [],

  };
  this.handleStartPress = this.handleStartPress.bind(this);
  this.startStopButton = this.startStopButton.bind(this);
  this.handleLapPress = this.handleLapPress.bind(this);
}

laps() {
  return this.state.laps.map(function(time, index) {
    return <View key={index} style={styles.lap}>
      <Text style={styles.lapText}>
        Lap #{index + 1}
      </Text>
      <Text style={styles.lapText}>
        {formatTime(time)}
      </Text>
    </View>
  });
}

startStopButton() {
  var style = this.state.running ? styles.stopButton : styles.startButton;

  return <TouchableHighlight underlayColor="gray"
    onPress={this.handleStartPress} style={[styles.button, style]}>
    <Text>
      {this.state.running ? 'Stop' : 'Start'}
    </Text>
  </TouchableHighlight>
}

lapButton() {
  return <TouchableHighlight style={styles.button}
  underlayColor="gray" onPress={this.handleLapPress}>
    <Text>
      {this.state.running ? 'Lap' : 'Reset'}
    </Text>
  </TouchableHighlight>
}

handleLapPress() {

  if (this.state.running==false) {
    this.setState({
      timeElapsed: null,
      running: false,
      startTime: null,
      laps: [],
    });
    return
  }

  var lap = this.state.timeElapsed;

  this.setState({
    startTime: new Date(),
    laps: this.state.laps.concat([lap])
  });


}

handleStartPress() {
  if (this.state.running) {
    clearInterval(this.interval);
    this.setState({running: false});
    return
  }

  this.setState({startTime: new Date()});

  this.interval = setInterval(() => {
    this.setState({
      timeElapsed: new Date() - this.state.startTime,
      running: true
    });
  }, 30);
}

render() {
  return <View style={styles.container}>
    <View style={styles.header}>
      <View style={styles.timerWrapper}>
        <Text style={styles.timer}>
          {formatTime(this.state.timeElapsed)}
        </Text>
      </View>
      <View style={styles.buttonWrapper}>
        {this.lapButton()}
        {this.startStopButton()}
      </View>
    </View>
    <View style={styles.footer}>
       {this.laps()}
    </View>
  </View>
}
}

const styles = StyleSheet.create({
container: {
  flex: 1,
  margin: 20
},
header: {
  flex: 1
},
footer: {
  flex: 1
},
timerWrapper: {
  flex: 5,
  justifyContent: 'center',
  alignItems: 'center'
},
buttonWrapper: {
  flex: 3,
  flexDirection: 'row',
  justifyContent: 'space-around',
  alignItems: 'center'
},
lap: {
  justifyContent: 'space-around',
  flexDirection: 'row',
  backgroundColor: 'lightgray',
  padding: 10,
  marginTop: 10
},
button: {
  borderWidth: 2,
  height: 100,
  width: 100,
  borderRadius: 50,
  justifyContent: 'center',
  alignItems: 'center'
},
timer: {
  fontSize: 60
},
lapText: {
  fontSize: 30
},
startButton: {
  borderColor: 'green'
},
stopButton: {
  borderColor: 'red'
}
});

AppRegistry.registerComponent('flexbox', ()=>flexbox);
