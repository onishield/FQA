//2
import React from 'react';
import { AppRegistry, StyleSheet, Text, View } from 'react-native';

export default class App extends React.Component {
  render() {
    return (
      <View style={styles.container}>
      <Text style={styles.headline}>'Hello World!'</Text>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  headline: {
      fontSize:40
  }

});
AppRegistry.registerComponent('flexbox', ()=>flexbox);

//3
import React from 'react';
import { AppRegistry, StyleSheet, Text, View } from 'react-native';

export default class App extends React.Component {
  render() {
    return (
      <View style={styles.outer}>
        <View style={styles.inner}>
          <View style={[styles.box,{backgroundColor:'red'}]}></View>
          <View style={[styles.box,{backgroundColor:'blue'}]}></View>
        </View>
        <View style={[styles.inner,
          {alignItems: 'flex-end'}]}>
          <View style={[styles.box,{backgroundColor:'green'}]}></View>
          <View style={[styles.box,{backgroundColor:'pink'}]}></View>

        </View>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  outer:{
    flex: 1,
    flexDirection:'row'

  },
  inner:{
    flex: 1,
    justifyContent:'space-between'
  },
  box:{
    width: 50,
    height: 50
  }

});
AppRegistry.registerComponent('flexbox', ()=>flexbox);

//4
import React from 'react';
import { AppRegistry, StyleSheet, Text, View, Image } from 'react-native';

export default class App extends React.Component {
  render() {
    return (
      <View style={styles.container}>
        <View style={{height:20}}/>
        <View style={styles.row}>
          <Image
            style={{height:100, width:100}}
            source={{uri:'https://facebook.github.io/react/img/logo_og.png'}}
        />
        <View style={[styles.container,{paddingLeft:5}]}>
          <Text style={styles.header}>
              React Course.
          </Text>
          <Text>
            Course about how to write the React Web Framwork.
          </Text>
        </View>
      </View>
      <View style={styles.row}>
        <Image
          style={{height:100, width:100}}
          source={{uri:'https://facebook.github.io/react/img/logo_og.png'}}
      />
      <View style={[styles.container,{paddingLeft:5}]}>
        <Text style={styles.header}>
            React Native Course.
        </Text>
        <Text>
          Course about how to write the Moblie App in iOS and Android by using React Native.
        </Text>
      </View>

      </View>

      <View style={styles.row}>
        <Image
          style={{height:100, width:100}}
          source={{uri:'https://facebook.github.io/react/img/logo_og.png'}}
      />
      <View style={[styles.container,{paddingLeft:5}]}>
        <Text style={styles.header}>
            Redux Course.
        </Text>
        <Text>
          Course about a predictable.
        </Text>
      </View>

      </View>
    </View>
    );
  }
}

const styles = StyleSheet.create({
  container:{
    flex: 1,

  },
  row:{
    justifyContent:'flex-start',
    flexDirection: 'row',
    alignItems: 'center',
    marginBottom: 5
  },
  header:{
    fontSize:20,
    flexWrap: 'wrap'
  }

});
AppRegistry.registerComponent('flexbox', ()=>flexbox);


//5
import React from 'react';
import { AppRegistry, StyleSheet, Text, View, Image } from 'react-native';

export default class App extends React.Component {
  render() {
    return (
      <View style={styles.container}>
      <View style={styles.time}>
      <Text style={{fontSize:60, fontWeight:'400'}}>
        00:03.24
      </Text>
      </View>

      <View style={{marginLeft:50, marginTop:70, flexDirection: 'row'}}>
        <View style={styles.circle}>
          <Text style={[styles.center,{paddingLeft:20,paddingTop:20,marginLeft:15,marginTop:20,marginRight:10}]}>Lap</Text>


        </View>
        <View style={[styles.circle,{marginLeft:60}]}>
        <Text style={[styles.center,{paddingLeft:20,paddingTop:20,marginLeft:15,marginTop:20,marginRight:15}]}>
        Start
        </Text>
        </View>

      </View>

      <View style={styles.row}>
        <Text style={[styles.background,{fontSize:40,padding:10,marginTop:10}]}>Lap #2  00:00.0</Text>
        <Text style={[styles.background,{fontSize:40,padding:10,marginTop:10}]}>Lap #1  00:00.0</Text>
      </View>

      </View>
    );
  }
}

const styles = StyleSheet.create({
  center:{
    alignItems:'center'
  },

  container:{
    flex: 1,


  },

  time:{
    paddingTop:80,
    alignItems:'center',
  },

  circle:{
    width:100,
    height:100,
    borderWidth:2,
    borderRadius:50

  },
  row:{
    alignItems:'center',

  },
  background:{
    backgroundColor:'pink',

  }

});
AppRegistry.registerComponent('flexbox', ()=>flexbox);

//6
import React from 'react';
import { AppRegistry, StyleSheet, Text, View, Image } from 'react-native';

export default class App extends React.Component {
  render() {
    return (
      <View style={styles.container}>
      <View style={styles.time}>
      <Text style={{fontSize:25}}>TSEC</Text>
      <Text style={{fontSize:70, fontWeight:'400'}}>9,165.91</Text>
      <Text style={{fontSize:35}}>+13.03(0.14)</Text>
      </View>

      <View style={{marginLeft:10, marginRight:10, marginTop:70, flexDirection: 'row', justifyContent:'space-between'}}>
        <View style={[styles.button,{marginleft:10}]}>
          <Text style={[styles.center,{padding:20}]}>SET</Text>
        </View>
        <View style={styles.button}>
        <Text style={[styles.center,{padding:20}]}>SET</Text>
        </View>
        <View style={styles.button}>
          <Text style={[styles.center,{padding:20}]}>SET</Text>
        </View>



      </View>

      <View style={{marginLeft:10, marginRight:10, marginTop:20, flexDirection: 'row', justifyContent:'space-between'}}>
        <View style={styles.button}>
          <Text style={[styles.center,{padding:15}]}>SET</Text>
        </View>
        <View style={styles.button}>
        <Text style={[styles.center,{padding:20}]}>SET</Text>
        </View>
        <View style={styles.button}>
          <Text style={[styles.center,{padding:20}]}>SET</Text>
        </View>



      </View>

      <View style={{marginLeft:10, marginRight:10, marginTop:20, flexDirection: 'row', justifyContent:'space-between'}}>
        <View style={styles.button}>
          <Text style={[styles.center,{padding:20}]}>SET</Text>
        </View>
        <View style={styles.button}>
        <Text style={[styles.center,{padding:20}]}>SET</Text>
        </View>
        <View style={styles.button}>
          <Text style={[styles.center,{padding:20}]}>SET</Text>
        </View>



      </View>


      </View>
    );
  }
}

const styles = StyleSheet.create({
  center:{
    alignItems:'center'
  },

  container:{
    flex: 1,


  },

  time:{
    paddingTop:80,
    alignItems:'center',
  },

  button:{
    width:100,
    height:60,
    borderWidth:2,
    borderRadius:10

  },
  row:{
    alignItems:'center',

  },
  background:{
    backgroundColor:'pink',

  }

});
AppRegistry.registerComponent('flexbox', ()=>flexbox);
