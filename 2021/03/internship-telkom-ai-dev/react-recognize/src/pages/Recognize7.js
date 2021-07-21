import React from "react";
import DragAndDrop from 'components/DragAndDrop';

export default class Recognize7 extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            person: [],
            selectedGroup: '',
            selectedSubGroup: ''
        };

        this.handleDropdownChangeGroup = this.handleDropdownChangeGroup.bind(this);
        this.handleDropdownChangeSubGroup = this.handleDropdownChangeSubGroup.bind(this);
    }

    async componentDidMount() {
        const url = "http://localhost:5000/recognize";
        const response = await fetch(url);
        const data = await response.json();
        this.setState({ person: data, loading: false });
        console.log(data)
    }

    handleDropdownChangeGroup(e) {
        this.setState({ selectedGroup: e.target.value });
    }
    handleDropdownChangeSubGroup(e) {
        this.setState({ selectedSubGroup: e.target.value });
    }




    render() {
        // Upload files
        const handleDrop = (acceptedFiles, fileRejections) => {
            acceptedFiles.map((file) => {
                console.log(file);
            });

            fileRejections.map(({ file, errors }) => {
                errors.map((error) => {
                    alert(`${file.path} - ${error.message}`);
                });
            });
        };

        // Dropdown
        const { person } = this.state;
        let groupList = person.length > 0
            && person.map((item, i) => {
                return (
                    <option key={i} value={item.groupname}> {item.groupname}</option>
                )
            }, this)

        let subgroupList = person.length > 0
            && person.map((item, i) => {
                return (
                    <option key={i} value={item.id}> {item.subgroupname}</option>
                )
            }, this)

        console.log('groupname:', this.state.selectedGroup)
        console.log('subgroupid:', this.state.selectedSubGroup)


        // To be displayed
        return (
            <div>
                <select id='group' onChange={this.handleDropdownChangeGroup}>
                    <option value='' disabled selected hidden>Select Group</option>
                    {groupList}
                </select>
                <br />
                <select id='subgroup' onChange={this.handleDropdownChangeSubGroup}>
                    <option value='' disabled selected hidden>Select Subgroup</option>
                    {subgroupList}
                </select>
                <section>
                    <DragAndDrop onDrop={handleDrop} />
                </section>

                <div>Selected group is: {this.state.selectedGroup}</div>
                <div>Selected subgroup ID is: {this.state.selectedSubGroup}</div>

                <button type='submit'>Recognize</button>
            </div >
        );
    }
}