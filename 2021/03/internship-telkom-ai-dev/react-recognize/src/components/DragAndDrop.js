import React from 'react';
import PropTypes from 'prop-types';
import Dropzone from 'react-dropzone';

import { dropzone, accept, reject } from './styles/DragAndDrop.module.scss';

const DragAndDrop = ({ onDrop }) => {
  return (
    <div>
      <Dropzone onDrop={onDrop} accept="image/jpeg, image/png" maxFile={1}>
        {({
          getRootProps,
          getInputProps,
          isDragActive,
          isDragAccept,
          isDragReject,
        }) => {
          const additionalClass = isDragAccept
            ? accept
            : isDragReject
              ? reject
              : '';

          return (
            <div
              {...getRootProps({
                className: `${dropzone} ${additionalClass}`,
              })}
            >
              <input {...getInputProps()} />
              <span>{isDragActive ? '📂' : '📁'}</span>
              <p>Drop files here or click to select files to upload</p>
            </div>
          );
        }}
      </Dropzone>
    </div>
  );
};

DragAndDrop.propTypes = {
  onDrop: PropTypes.func,
};

export default DragAndDrop;
