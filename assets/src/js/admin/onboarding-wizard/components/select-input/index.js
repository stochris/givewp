// Import vendor dependencies
import PropTypes from 'prop-types';

// Import utilities
import { toKebabCase } from '../../utils';

// Import styles
import './style.scss';

const SelectInput = ( { label, value, onChange, options } ) => {
	const optionElements = options.map( ( option, index ) => {
		return (
			<option value={ option.value } key={ index }>{ option.label }</option>
		);
	} );
	return (
		<div className="give-obw-select-input">
			{ label && ( <label className="give-obw-select-input__label" htmlFor={ toKebabCase( label ) }>{ label }</label> ) }
			<select value={ value } className="give-obw-select-input__input" id={ label && toKebabCase( label ) } onChange={ ( event ) => onChange( event.target.value ) } >
				{ optionElements }
			</select>
		</div>
	);
};

SelectInput.propTypes = {
	label: PropTypes.string,
	value: PropTypes.string.isRequired,
	onChange: PropTypes.func,
	options: PropTypes.array.isRequired,
};

SelectInput.defaultProps = {
	label: null,
	value: null,
	onChange: null,
	options: null,
};

export default SelectInput;