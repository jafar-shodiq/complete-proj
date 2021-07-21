import React from "react";

export default class Recognize5 extends React.Component {
    state = {
        person: []
    };

    async componentDidMount() {
        const url = "http://localhost:5000/recognize";
        const response = await fetch(url);
        const data = await response.json();
        this.setState({ person: data, loading: false });
        console.log(data)
    }

    // handleChange(e) {
    //     this.setState({ person: e.currentTarget.person })
    //     console.log('name')
    // }

    render() {
        const { person } = this.state;

        let groupList = person.length > 0
            && person.map((item, i) => {
                return (
                    <option key={i} value={item.id} > {item.groupname}</option>
                )
            }, this)

        let subgroupList = person.length > 0
            && person.map((item, i) => {
                return (
                    <option key={i} value={item.id} > {item.subgroupname}</option>
                )
            }, this)

        const selected = document.getElementById('asdf1');
        console.log(selected)

        // selected.addEventListener('change', (e) => {
        //     // log(`e.target`, e.target);
        //     const select = e.target;
        //     const value = select.value;
        //     const desc = select.selectedOptions[0].text;
        //     console.log('group: ', desc);
        // });

        return (
            <div>
                {/* <select onChange={this.handleChange}> */}
                <select id='asdf1'>
                    <option value='' disabled selected hidden>Select Group</option>
                    {groupList}
                </select>
                <br />
                <select>
                    <option value='' disabled selected hidden> Select Subgroup</option>
                    {subgroupList}
                </select>
                <p>[Upload]</p>

                <button type='submit'>Submit</button>
            </div >
        );
    }
}